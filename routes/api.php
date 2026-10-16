<?php

use App\Http\Controllers\Api\V1\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Public Authentication Routes
    |--------------------------------------------------------------------------
    */

    Route::prefix('auth')->group(function () {

        Route::post('/register', [
            AuthController::class,
            'register',
        ])->middleware('throttle:5,1');

        Route::post('/login', [
            AuthController::class,
            'webLogin',
        ])->middleware('throttle:5,1');

        Route::post('/mobile/login', [
            AuthController::class,
            'mobileLogin',
        ])->middleware('throttle:5,1');
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
