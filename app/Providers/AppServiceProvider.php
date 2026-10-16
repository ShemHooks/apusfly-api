<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Gate::before(function (User $user, string $ability) {

            // Suspended or deactivated users cannot proceed.
            if ($user->status !== 'active') {
                return false;
            }

            // Super Admin has platform-wide access.
            if ($user->hasRole('super_admin')) {
                return true;
            }

            // Check only platform-scoped permissions.
            if ($user->hasPermission($ability)) {
                return true;
            }

            // Let Laravel's normal Gate/Policy checks run.
            return null;
        });
    }
}
