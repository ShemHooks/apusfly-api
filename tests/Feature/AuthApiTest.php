<?php

namespace Tests\Feature;

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\PersonalAccessToken;
use Tests\TestCase;

class AuthApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_customer_can_register(): void
    {
        Role::create([
            'name' => 'customer',
            'description' => 'Individual Customer',
            'scope' => 'platform',
        ]);

        $response = $this->postJson('/api/v1/auth/register', [
            'first_name' => 'Juan',
            'last_name' => 'Dela Cruz',
            'email' => 'juan@example.com',
            'password' => 'Password123',
            'password_confirmation' => 'Password123',
            'account_type' => 'customer',
        ]);

        $response->assertCreated()
            ->assertJsonPath('success', true)
            ->assertJsonPath('data.email', 'juan@example.com');

        $user = User::where('email', 'juan@example.com')
            ->firstOrFail();

        $this->assertTrue($user->hasRole('customer'));
    }

    public function test_mobile_user_can_login(): void
    {
        $user = User::factory()->create([
            'password' => 'Password123',
        ]);

        $response = $this->postJson('/api/v1/auth/mobile/login', [
            'email' => $user->email,
            'password' => 'Password123',
        ]);

        $response->assertOk()
            ->assertJsonPath('success', true)
            ->assertJsonPath('data.token_type', 'Bearer')
            ->assertJsonStructure([
                'data' => ['user', 'token', 'token_type'],
            ]);

        $this->assertDatabaseHas('personal_access_tokens', [
            'tokenable_id' => $user->id,
        ]);
    }

    public function test_invalid_credentials_are_rejected(): void
    {
        $user = User::factory()->create();

        $this->postJson('/api/v1/auth/mobile/login', [
            'email' => $user->email,
            'password' => 'WrongPassword123',
        ])
            ->assertUnprocessable()
            ->assertJsonPath('success', false);
    }

    public function test_unauthenticated_user_cannot_access_me(): void
    {
        $this->getJson('/api/v1/auth/me')
            ->assertUnauthorized()
            ->assertJsonPath('success', false);
    }

    public function test_suspended_user_cannot_login(): void
    {
        $user = User::factory()->suspended()->create([
            'password' => 'Password123',
        ]);

        $this->postJson('/api/v1/auth/mobile/login', [
            'email' => $user->email,
            'password' => 'Password123',
        ])
            ->assertUnprocessable()
            ->assertJsonPath('success', false);
    }

    public function test_mobile_logout_revokes_current_token(): void
    {
        $user = User::factory()->create();

        $token = $user->createToken('apusfly-mobile');

        $this->withToken($token->plainTextToken)
            ->postJson('/api/v1/auth/logout')
            ->assertOk()
            ->assertJsonPath('success', true);

        $this->assertDatabaseMissing('personal_access_tokens', [
            'id' => $token->accessToken->id,
        ]);
    }

    public function test_suspended_user_cannot_access_me(): void
    {
        $user = User::factory()->suspended()->create();

        $token = $user->createToken('apusfly-mobile');

        $this->withToken($token->plainTextToken)
            ->getJson('/api/v1/auth/me')
            ->assertForbidden();
    }
}
