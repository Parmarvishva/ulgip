<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            'view dashboard',
            'manage documents',
            'manage categories',
            'manage cyber alerts',
            'manage users',
            'manage settings',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $superAdmin = Role::firstOrCreate(['name' => 'Super Admin']);
        $admin      = Role::firstOrCreate(['name' => 'Admin']);
        $officer    = Role::firstOrCreate(['name' => 'Officer']);
        $user       = Role::firstOrCreate(['name' => 'User']);

        $superAdmin->givePermissionTo(Permission::all());

        $admin->givePermissionTo([
            'view dashboard',
            'manage documents',
            'manage categories',
            'manage cyber alerts',
            'manage users',
            'manage settings',
        ]);

        $officer->givePermissionTo([
            'view dashboard',
            'manage documents',
            'manage cyber alerts',
        ]);

        $user->givePermissionTo([
            'view dashboard',
        ]);
    }
}