<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            'user_management_access',
            'permission_create',
            'permission_show',
            'permission_edit',
            'permission_delete',
            'permission_access',
            'role_create',
            'role_show',
            'role_edit',
            'role_delete',
            'role_access',
            'user_access',
            'user_create',
            'user_show',
            'user_edit',
            'user_delete',
            'establishment_management_access',
            'establishment_access',
            'establishment_create',
            'establishment_show',
            'establishment_edit',
            'establishment_delete',
            'visited_at_management_access',
            'visited_at_access',
            'visited_at_create',
            'visited_at_show',
            'visited_at_edit',
            'visited_at_delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }

        Role::create(['name' => 'Super Admin']);

        $establishmentRole = Role::create(['name' => 'Establishment Role']);
        $establishmentPermissions = [
            'establishment_management_access',
            'establishment_access',
            'establishment_create',
            'establishment_show',
            'establishment_edit',
            'establishment_delete',
            'visited_at_create',

        ];

        foreach ($establishmentPermissions as $establishmentPermission) {
            $establishmentRole->givePermissionTo($establishmentPermission);
        }


        $userRole = Role::create(['name' => 'User']);

        $userPermissions = [
            'user_create',
            'user_show',
            'user_edit',
        ];

        foreach ($userPermissions as $userPermission) {
            $userRole->givePermissionTo($userPermission);
        }

        $user = \App\Models\User::factory()->create([
            'name' => 'Example User',
            'email' => 'test@example.com',
        ]);


        // $user = \App\Models\User::factory()->create([
        //     'name' => 'Example Admin User',
        //     'email' => 'admin@example.com',
        // ]);
        // $user->assignRole($role2);

        // $user = \App\Models\User::factory()->create([
        //     'name' => 'Example Super-Admin User',
        //     'email' => 'superadmin@example.com',
        // ]);
        // $user->assignRole($role3);
    }
}
