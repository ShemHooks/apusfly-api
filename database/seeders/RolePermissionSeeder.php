<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {
            $all = Permission::pluck('id', 'name');

            $matrix = [

                // PLATFORM ADMINISTRATION

                'system_admin' => [
                    'admin.access',
                    'dashboard.view',
                    'users.read',
                    'users.create',
                    'users.update',
                    'roles.read',
                    'permissions.read',
                    'providers.read',
                    'pilots.read',
                    'drones.read',
                    'services.read',
                    'bookings.read',
                    'audit_logs.read',
                ],

                'operations_manager' => [
                    'admin.access',
                    'dashboard.view',
                    'providers.read',
                    'providers.verify',
                    'pilots.read',
                    'pilots.verify',
                    'drones.read',
                    'services.read',
                    'services.approve',
                    'bookings.read',
                    'bookings.manage',
                    'bookings.assign',
                    'disputes.read',
                ],

                'customer_support' => [
                    'admin.access',
                    'dashboard.view',
                    'users.read',
                    'providers.read',
                    'bookings.read',
                    'support.access',
                    'disputes.read',
                    'disputes.manage',
                    'reports.read',
                ],

                'finance_accounting' => [
                    'admin.access',
                    'dashboard.view',
                    'payments.read',
                    'payouts.read',
                    'financial_reports.read',
                ],

                // INDIVIDUAL CUSTOMER

                'customer' => [
                    'profile.manage_own',
                    'bookings.create',
                    'bookings.view_own',
                    'bookings.cancel_own',
                    'quotes.view_own',
                    'payments.view_own',
                    'reviews.create_own',
                ],

                // INDEPENDENT PILOT

                'pilot' => [
                    'profile.manage_own',
                    'pilot.dashboard',
                    'pilot.profile.manage_own',
                    'pilot.credentials.manage_own',
                    'pilot.jobs.view_own',
                    'pilot.jobs.update_own',
                    'pilot.availability.manage_own',
                ],

                // PROVIDER ORGANIZATION

                'provider_owner' => [
                    'provider.dashboard',
                    'provider.members.manage',
                    'provider.services.manage',
                    'provider.drones.manage',
                    'provider.pilots.manage',
                    'provider.bookings.read',
                    'provider.bookings.manage',
                    'provider.finances.read',
                ],

                'provider_manager' => [
                    'provider.dashboard',
                    'provider.services.manage',
                    'provider.drones.manage',
                    'provider.pilots.manage',
                    'provider.bookings.read',
                    'provider.bookings.manage',
                ],

                'provider_staff' => [
                    'provider.dashboard',
                    'provider.bookings.read',
                ],

                // ENTERPRISE CLIENT

                'enterprise_client' => [
                    'enterprise.dashboard',
                    'enterprise.bookings.read',
                    'enterprise.bookings.create',
                    'enterprise.reports.read',
                ],

                // GOVERNMENT / LGU

                'government_lgu' => [
                    'government.dashboard',
                    'government.bookings.read',
                    'government.bookings.create',
                    'government.reports.read',
                ],
            ];

            // Super Admin has all defined permissions.
            $matrix['super_admin'] = $all->keys()->all();

            foreach ($matrix as $roleName => $permissions) {
                $role = Role::where('name', $roleName)
                    ->firstOrFail();

                $missing = collect($permissions)
                    ->diff($all->keys());

                if ($missing->isNotEmpty()) {
                    throw new RuntimeException(
                        "Missing permissions for {$roleName}: "
                        . $missing->implode(', ')
                    );
                }

                $permissionIds = collect($permissions)
                    ->map(fn($name) => $all->get($name))
                    ->values()
                    ->all();

                $role->permissions()->sync($permissionIds);
            }
        });
    }
}
