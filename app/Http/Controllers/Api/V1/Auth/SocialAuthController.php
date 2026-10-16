<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\BaseController;
use App\Http\Resources\UserResource;
use App\Services\SocialAuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use RuntimeException;

class SocialAuthController extends BaseController
{
    public function __construct(
        private readonly SocialAuthService $socialAuthService
    ) {
    }

    /**
     * Authenticate using Google Sign-In.
     *
     * Supports Next.js and React Native clients.
     */
    public function googleLogin(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'id_token' => ['required', 'string'],
        ]);

        try {
            $result = $this->socialAuthService
                ->authenticateWithGoogle(
                    $validated['id_token']
                );
        } catch (RuntimeException $exception) {
            return $this->error(
                $exception->getMessage(),
                null,
                401
            );
        }

        return $this->success([
            'user' => new UserResource(
                $result['user']->load('roles.permissions')
            ),
            'token' => $result['token'],
            'token_type' => $result['token_type'],
            'is_new_user' => $result['is_new_user'],
        ], 'Google authentication successful.');
    }
}
