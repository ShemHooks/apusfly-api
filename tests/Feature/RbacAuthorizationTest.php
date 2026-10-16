<?php

namespace Tests\Feature;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RbacAuthorizationTest extends TestCase
{
    use RefreshDatabase;

    public function test_customer_cannot_access_admin_dashboard(): void
    {
        $user = User::factory()->create();

        $role = Role::create([
            'name' => 'customer',
            'description' => 'Individual Customer',
            'scope' => 'platform',
        ]);

        $user->roles()->attach($role->id);

        $this->actingAs($user)
            ->getJson('/api/v1/admin/dashboard')
            ->assertForbidden();
    }

    public function test_system_admin_can_access_admin_dashboard(): void
    {
        $user = User::factory()->create();

        $role = Role::create([
            'name' => 'system_admin',
            'description' => 'System Admin',
            'scope' => 'platform',
        ]);

        $permission = Permission::create([
            'name' => 'admin.access',
            'description' => 'Admin Access',
        ]);

        $role->permissions()->attach($permission->id);
        $user->roles()->attach($role->id);

        $this->actingAs($user)
            ->getJson('/api/v1/admin/dashboard')
            ->assertOk();
    }

    public function test_suspended_admin_cannot_access_dashboard(): void
    {
        $user = User::factory()->create([
            'status' => 'suspended',
        ]);

        $role = Role::create([
            'name' => 'super_admin',
            'description' => 'Super Admin',
            'scope' => 'platform',
        ]);

        $user->roles()->attach($role->id);

        $this->actingAs($user)
            ->getJson('/api/v1/admin/dashboard')
            ->assertForbidden();
    }
}
