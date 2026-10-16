<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Api\V1\Auth\LoginRequest;
use App\Http\Requests\Api\V1\Auth\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends BaseController
{
    public function __construct(
        private readonly AuthService $authService
    ) {
    }

    public function register(RegisterRequest $request): JsonResponse
    {
        $user = $this->authService->register(
            $request->validated()
        );

        return $this->created(
            new UserResource($user->load('roles.permissions')),
            'Account registered successfully.'
        );
    }

    // Next.js: stateful cookie-based authentication.
    public function webLogin(LoginRequest $request): JsonResponse
    {
        $user = $this->authService->authenticate(
            $request->validated()
        );

        Auth::guard('web')->login($user);

        $request->session()->regenerate();

        $this->authService->recordLogin($user);

        return $this->success(
            new UserResource($user->load('roles.permissions')),
            'Login successful.'
        );
    }

    // React Native: bearer-token authentication.
    public function mobileLogin(LoginRequest $request): JsonResponse
    {
        $user = $this->authService->authenticate(
            $request->validated()
        );

        $token = $user->createToken(
            'apusfly-mobile',
            ['mobile']
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

    public function me(Request $request): JsonResponse
    {
        return $this->success(
            new UserResource(
                $request->user()->load('roles.permissions')
            ),
            'User retrieved successfully.'
        );
    }

    public function logout(Request $request): JsonResponse
    {
        $token = $request->user()->currentAccessToken();

        if ($token instanceof \Laravel\Sanctum\PersonalAccessToken) {
            $token->delete();
        } else {
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return $this->success(
            null,
            'Logged out successfully.'
        );
    }
}
