<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use RuntimeException;

class TestUserSeeder extends Seeder
{
    public function run(): void
    {
        if (app()->environment('production')) {
            throw new RuntimeException(
                'Test users cannot be seeded in production.'
            );
        }

        $password = env('TEST_USER_PASSWORD');

        if (!is_string($password) || strlen($password) < 12) {
            throw new RuntimeException(
                'Set TEST_USER_PASSWORD to a password of at least 12 characters.'
            );
        }

        $testUsers = [
            [
                'first_name' => 'Test',
                'last_name' => 'Customer',
                'email' => 'customer@apusfly.test',
                'role' => 'customer',
            ],
            [
                'first_name' => 'Test',
                'last_name' => 'Pilot',
                'email' => 'pilot@apusfly.test',
                'role' => 'pilot',
            ],
            [
                'first_name' => 'Test',
                'last_name' => 'Provider',
                'email' => 'provider@apusfly.test',
                'role' => 'provider_owner',
            ],
            [
                'first_name' => 'Test',
                'last_name' => 'Administrator',
                'email' => 'admin@apusfly.test',
                'role' => 'system_admin',
            ],
            [
                'first_name' => 'Test',
                'last_name' => 'Support',
                'email' => 'support@apusfly.test',
                'role' => 'customer_support',
            ],
        ];

        foreach ($testUsers as $data) {
            $role = Role::query()
                ->where('name', $data['role'])
                ->where(
                    'scope',
                    $data['role'] === 'provider_owner'
                    ? 'provider'
                    : 'platform'
                )
                ->first();

            if (!$role) {
                throw new RuntimeException(
                    "Role '{$data['role']}' was not found. Run RoleSeeder first."
                );
            }

            $user = User::query()->updateOrCreate(
                [
                    'email' => $data['email'],
                ],
                [
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'password' => Hash::make($password),
                    'status' => 'active',
                    'email_verified_at' => now(),
                ]
            );

            // This seeder manages only the specified test role.
            // Re-running it will not create duplicate role assignments.
            $user->roles()->sync([$role->id]);

            $this->command?->info(
                "Test user ready: {$user->email} ({$data['role']})"
            );
        }
    }
}
