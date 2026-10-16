<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Api\V1\Auth\LoginRequest;
use App\Http\Requests\Api\V1\Auth\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;

class AuthController extends BaseController
{
    public function __construct(
        private readonly AuthService $authService
    ) {
    }

    /**
     * Register a new user account.
     */
    public function register(RegisterRequest $request): JsonResponse
    {
        $user = $this->authService->register(
            $request->validated()
        );

        return $this->created(
            new UserResource(
                $user->load('roles.permissions')
            ),
            'Account registered successfully.'
        );
    }

    /**
     * Authenticate a user and issue a Sanctum Bearer token.
     *
     * Used by both Next.js and React Native.
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $user = $this->authService->authenticate(
            $request->validated()
        );

        $token = $user->createToken(
            'apusfly-client',
            ['access']
        )->plainTextToken;

        $this->authService->recordLogin($user);

        return $this->success([
            'user' => new UserResource(
                $user->load('roles.permissions')
            ),
            'token' => $token,
            'token_type' => 'Bearer',
        ], 'Login successful.');
    }

    /**
     * Retrieve the currently authenticated user.
     */
    public function me(Request $request): JsonResponse
    {
        return $this->success(
            new UserResource(
                $request->user()->load('roles.permissions')
            ),
            'User retrieved successfully.'
        );
    }

    /**
     * Revoke the current Sanctum Bearer token.
     */
    public function logout(Request $request): JsonResponse
    {
        $token = $request->user()->currentAccessToken();

        if ($token instanceof PersonalAccessToken) {
            $token->delete();
        }

        return $this->success(
            null,
            'Logged out successfully.'
        );
    }
}
