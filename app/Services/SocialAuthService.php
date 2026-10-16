<?php

namespace App\Services;

use App\Models\Role;
use App\Models\SocialAccount;
use App\Models\User;
use Google\Client as GoogleClient;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RuntimeException;

class SocialAuthService
{
    public function __construct(
        private readonly GoogleClient $googleClient
    ) {
    }

    public function authenticateWithGoogle(string $idToken): array
    {
        $clientId = config('services.google.client_id');

        if (!is_string($clientId) || $clientId === '') {
            throw new RuntimeException('Google authentication is not configured.');
        }

        $this->googleClient->setClientId($clientId);

        $payload = $this->googleClient->verifyIdToken($idToken);

        if (!is_array($payload)) {
            throw new RuntimeException('Invalid Google ID token.');
        }

        $googleId = $payload['sub'] ?? null;
        $email = $payload['email'] ?? null;
        $emailVerified = ($payload['email_verified'] ?? false) === true
            || ($payload['email_verified'] ?? false) === 'true';

        if (!is_string($googleId) || $googleId === '') {
            throw new RuntimeException('Google account identifier is missing.');
        }

        if (!is_string($email) || $email === '' || !$emailVerified) {
            throw new RuntimeException('A verified Google email is required.');
        }

        $email = Str::lower($email);

        $result = DB::transaction(function () use ($googleId, $email, $payload) {
            $socialAccount = SocialAccount::query()
                ->where('provider', 'google')
                ->where('provider_user_id', $googleId)
                ->first();

            if ($socialAccount) {
                $user = User::query()
                    ->lockForUpdate()
                    ->findOrFail($socialAccount->user_id);

                if ($user->status !== 'active') {
                    throw new RuntimeException('This account is not active.');
                }

                $socialAccount->update([
                    'provider_email' => $email,
                    'provider_email_verified' => true,
                    'last_used_at' => now(),
                ]);

                return [
                    'user' => $user,
                    'is_new_user' => false,
                ];
            }

            // Existing accounts must be linked through a separate,
            // authenticated account-linking process.
            if (User::query()->where('email', $email)->exists()) {
                throw new RuntimeException(
                    'An account with this email already exists. Sign in using your existing method.'
                );
            }

            $customerRole = Role::query()
                ->where('name', 'customer')
                ->where('scope', 'platform')
                ->firstOrFail();

            $firstName = trim((string) ($payload['given_name'] ?? 'Google'));
            $lastName = trim((string) ($payload['family_name'] ?? 'User'));

            $user = User::create([
                'first_name' => $firstName ?: 'Google',
                'last_name' => $lastName ?: 'User',
                'email' => $email,
                'password' => null,
                'status' => 'active',
                'email_verified_at' => now(),
            ]);

            $user->roles()->attach($customerRole->id);

            SocialAccount::create([
                'user_id' => $user->id,
                'provider' => 'google',
                'provider_user_id' => $googleId,
                'provider_email' => $email,
                'provider_email_verified' => true,
                'linked_at' => now(),
                'last_used_at' => now(),
            ]);

            return [
                'user' => $user,
                'is_new_user' => true,
            ];
        });

        $user = $result['user'];

        $token = $user->createToken(
            'apusfly-mobile',
            ['mobile']
        )->plainTextToken;

        return [
            'user' => $user,
            'token' => $token,
            'token_type' => 'Bearer',
            'is_new_user' => $result['is_new_user'],
        ];
    }
}
