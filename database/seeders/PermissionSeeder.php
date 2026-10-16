<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            // Platform
            'admin.access',
            'dashboard.view',
            'settings.manage',
            'audit_logs.read',

            // Users
            'users.read',
            'users.create',
            'users.update',
            'users.suspend',
            'users.assign_roles',

            // RBAC
            'roles.read',
            'roles.manage',
            'permissions.read',
            'permissions.manage',

            // Providers
            'providers.read',
            'providers.verify',
            'providers.suspend',
            'providers.manage',

            // Pilots and drones
            'pilots.read',
            'pilots.verify',
            'drones.read',
            'drones.manage',

            // Services
            'services.read',
            'services.manage',
            'services.approve',

            // Bookings
            'bookings.read',
            'bookings.manage',
            'bookings.assign',
            'bookings.cancel',

            // Financial operations
            'payments.read',
            'payments.manage',
            'refunds.manage',
            'payouts.read',
            'payouts.manage',
            'financial_reports.read',

            // Support
            'support.access',
            'disputes.read',
            'disputes.manage',
            'reports.read',

            // Provider organization
            'provider.dashboard',
            'provider.members.manage',
            'provider.services.manage',
            'provider.drones.manage',
            'provider.pilots.manage',
            'provider.bookings.read',
            'provider.bookings.manage',
            'provider.finances.read',

            // Enterprise
            'enterprise.dashboard',
            'enterprise.members.manage',
            'enterprise.bookings.read',
            'enterprise.bookings.create',
            'enterprise.reports.read',

            // Government / LGU
            'government.dashboard',
            'government.bookings.read',
            'government.bookings.create',
            'government.reports.read',

            // Individual Customer
            'profile.manage_own',
            'bookings.create',
            'bookings.view_own',
            'bookings.cancel_own',
            'quotes.view_own',
            'payments.view_own',
            'reviews.create_own',

            // Independent Pilot
            'pilot.dashboard',
            'pilot.profile.manage_own',
            'pilot.credentials.manage_own',
            'pilot.jobs.view_own',
            'pilot.jobs.update_own',
            'pilot.availability.manage_own',
        ];

        foreach ($permissions as $name) {
            Permission::updateOrCreate(
                ['name' => $name],
                [
                    'description' => str($name)
                        ->replace(['.', '_'], ' ')
                        ->title()
                        ->toString()
                ]
            );
        }
    }
}
