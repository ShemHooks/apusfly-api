<?php

use App\Http\Controllers\Api\V1\Auth\AuthController;
use App\Http\Controllers\Api\V1\Auth\SocialAuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| ApusFly API - Version 1
|--------------------------------------------------------------------------
|
| Authentication: Laravel Sanctum
| Clients: Next.js Web and React Native Mobile
| Authorization: RBAC and Laravel Policies
|
*/

Route::prefix('v1')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Public Authentication Routes
    |--------------------------------------------------------------------------
    */

    Route::prefix('auth')->group(function () {

        // Email/password registration
        Route::post('/register', [
            AuthController::class,
            'register',
        ])->middleware('throttle:5,1');

        // Shared email/password login
        Route::post('/login', [
            AuthController::class,
            'login',
        ])->middleware('throttle:5,1');

        // Google social authentication
        Route::post('/google', [
            SocialAuthController::class,
            'googleLogin',
        ])->middleware('throttle:10,1');
    });

    /*
    |--------------------------------------------------------------------------
    | Authenticated Routes
    |--------------------------------------------------------------------------
    */

    Route::middleware([
        'auth:sanctum',
        'account.active',
    ])->group(function () {

        Route::prefix('auth')->group(function () {

            Route::get('/me', [
                AuthController::class,
                'me',
            ]);

            Route::post('/logout', [
                AuthController::class,
                'logout',
            ]);
        });

        /*
        |--------------------------------------------------------------------------
        | Temporary RBAC Test Routes
        |--------------------------------------------------------------------------
        |
        | Available only during automated testing.
        |
        */

        if (app()->environment('testing')) {

            Route::prefix('admin')->group(function () {

                Route::get('/dashboard', fn() => response()->json([
                    'message' => 'Admin dashboard accessible.',
                ]))->middleware('platform.permission:admin.access');

                Route::get('/users', fn() => response()->json([
                    'message' => 'Users accessible.',
                ]))->middleware('platform.permission:users.read');
            });
        }
    });
});
