<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureAccountIsActive
{
    public function handle(
        Request $request,
        Closure $next
    ): Response {
        $user = $request->user();

        if (!$user || $user->status !== 'active') {
            return response()->json([
                'success' => false,
                'message' => 'Your account is not active.',
                'data' => null,
                'errors' => null,
            ], 403);
        }

        return $next($request);
    }
}
