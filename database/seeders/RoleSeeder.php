<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            // Platform Administration
            'super_admin' => [
                'Super Admin',
                'platform',
            ],
            'system_admin' => [
                'System Admin',
                'platform',
            ],
            'operations_manager' => [
                'Operations Manager',
                'platform',
            ],
            'customer_support' => [
                'Customer Support Agent',
                'platform',
            ],
            'finance_accounting' => [
                'Finance / Accounting',
                'platform',
            ],

            // Individual Users
            'customer' => [
                'Individual Customer',
                'platform',
            ],
            'pilot' => [
                'Independent Pilot',
                'platform',
            ],

            // Provider Organization
            'provider_owner' => [
                'Provider Owner',
                'provider',
            ],
            'provider_manager' => [
                'Provider Manager',
                'provider',
            ],
            'provider_staff' => [
                'Provider Staff',
                'provider',
            ],

            // Client Organizations
            'enterprise_client' => [
                'Enterprise Client',
                'organization',
            ],
            'government_lgu' => [
                'Government / LGU',
                'organization',
            ],
        ];

        foreach ($roles as $name => [$description, $scope]) {
            Role::updateOrCreate(
                ['name' => $name],
                [
                    'description' => $description,
                    'scope' => $scope,
                ]
            );
        }
    }
}
