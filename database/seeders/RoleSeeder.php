<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            // Platform administration
            [
                'name' => 'super_admin',
                'scope' => 'platform',
                'description' => 'Full platform administration.'
            ],

            [
                'name' => 'system_admin',
                'scope' => 'platform',
                'description' => 'Manages platform users and configurations.'
            ],

            [
                'name' => 'operations_manager',
                'scope' => 'platform',
                'description' => 'Oversees bookings and service operations.'
            ],

            [
                'name' => 'customer_support',
                'scope' => 'platform',
                'description' => 'Handles customer inquiries and support tickets.'
            ],

            [
                'name' => 'finance_accounting',
                'scope' => 'platform',
                'description' => 'Manages payments, settlements, and financial reports.'
            ],

            [
                'name' => 'sales_business_development',
                'scope' => 'platform',
                'description' => 'Manages sales leads and partnerships.'
            ],

            [
                'name' => 'marketing_manager',
                'scope' => 'platform',
                'description' => 'Manages campaigns and promotional content.'
            ],

            [
                'name' => 'auditor',
                'scope' => 'platform',
                'description' => 'Reviews audit records and compliance reports.'
            ],

            [
                'name' => 'technical_support',
                'scope' => 'platform',
                'description' => 'Investigates technical incidents and platform issues.'
            ],

            // Mobile application users
            [
                'name' => 'customer',
                'scope' => 'platform',
                'description' => 'Books and manages drone services.'
            ],

            [
                'name' => 'pilot',
                'scope' => 'platform',
                'description' => 'Performs assigned drone service operations.'
            ],

            // Provider organization roles
            [
                'name' => 'provider_owner',
                'scope' => 'provider',
                'description' => 'Owns and manages a drone service provider.'
            ],

            [
                'name' => 'provider_manager',
                'scope' => 'provider',
                'description' => 'Manages provider bookings, pilots, and drones.'
            ],

            [
                'name' => 'provider_staff',
                'scope' => 'provider',
                'description' => 'Supports provider scheduling and operations.'
            ],

            // Enterprise and government organization roles
            [
                'name' => 'enterprise_client',
                'scope' => 'organization',
                'description' => 'Manages enterprise drone service requests.'
            ],

            [
                'name' => 'government_lgu',
                'scope' => 'organization',
                'description' => 'Manages government drone service requests.'
            ],
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate(
                ['name' => $role['name']],
                [
                    'scope' => $role['scope'],
                    'description' => $role['description'],
                ]
            );
        }
    }
}
