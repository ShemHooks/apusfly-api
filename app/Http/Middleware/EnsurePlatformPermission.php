<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsurePlatformPermission
{
    public function handle(
        Request $request,
        Closure $next,
        string $permission
    ): Response {
        $user = $request->user();

        if (!$user || $user->status !== 'active') {
            return response()->json([
                'success' => false,
                'message' => 'Access denied.',
                'data' => null,
                'errors' => null,
            ], 403);
        }

        if (
            !$user->hasRole('super_admin') &&
            !$user->hasPermission($permission)
        ) {
            return response()->json([
                'success' => false,
                'message' => 'Insufficient permissions.',
                'data' => null,
                'errors' => null,
            ], 403);
        }

        return $next($request);
    }
}
