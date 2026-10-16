<?php

use App\Http\Middleware\EnsureAccountIsActive;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use App\Http\Middleware\EnsurePlatformPermission;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )

    ->withMiddleware(function (Middleware $middleware): void {

        $middleware->statefulApi();

        $middleware->alias([
            'account.active' => EnsureAccountIsActive::class,
            'platform.permission' => EnsurePlatformPermission::class,
        ]);
    })

    ->withExceptions(function (Exceptions $exceptions): void {

        // Normalize validation errors (422).
        $exceptions->render(function (ValidationException $e, Request $request) {
            if (!$request->is('api/*')) {
                return null;
            }

            return response()->json([
                'success' => false,
                'message' => 'Validation failed.',
                'data' => null,
                'errors' => $e->errors(),
            ], 422);
        });

        // Normalize unauthenticated requests (401).
        $exceptions->render(function (AuthenticationException $e, Request $request) {
            if (!$request->is('api/*')) {
                return null;
            }

            return response()->json([
                'success' => false,
                'message' => 'Unauthenticated.',
                'data' => null,
                'errors' => null,
            ], 401);
        });

        // Normalize authorization failures (403).
        $exceptions->render(function (AuthorizationException $e, Request $request) {
            if (!$request->is('api/*')) {
                return null;
            }

            return response()->json([
                'success' => false,
                'message' => 'You are not authorized to perform this action.',
                'data' => null,
                'errors' => null,
            ], $e->status() ?? 403);
        });

        // Normalize HTTP exceptions (404, 405, 429, etc.).
        $exceptions->render(function (HttpExceptionInterface $e, Request $request) {
            if (!$request->is('api/*')) {
                return null;
            }

            $status = $e->getStatusCode();

            return response()->json([
                'success' => false,
                'message' => match ($status) {
                    403 => 'You are not authorized to perform this action.',
                    404 => 'Resource not found.',
                    405 => 'Method not allowed.',
                    429 => 'Too many requests.',
                    default => 'Request failed.',
                },
                'data' => null,
                'errors' => null,
            ], $status, $e->getHeaders());
        });

        // Normalize unexpected server errors (500).
        $exceptions->render(function (Throwable $e, Request $request) {
            if (!$request->is('api/*')) {
                return null;
            }

            // Preserve detailed exceptions while debugging.
            if (config('app.debug')) {
                return null;
            }

            return response()->json([
                'success' => false,
                'message' => 'An unexpected server error occurred.',
                'data' => null,
                'errors' => null,
            ], 500);
        });
    })

    ->create();
