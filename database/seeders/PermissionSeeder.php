<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'user-menu',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',

            'role-menu',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

            'permission-menu',
            'permission-list',
            'permission-create',
            'permission-edit',
            'permission-delete',

            'appointment-menu',
            'appointment-list',
            'appointment-create',
            'appointment-edit',
            'appointment-delete',

            'doctor-menu',
            'doctor-list',
            'doctor-create',
            'doctor-edit',
            'doctor-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
