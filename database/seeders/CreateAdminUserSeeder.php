<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Admin::create([
            'first_name' => 'Admin',
            'last_name' => 'Super',
            'username' => 'admin1',
            'email' => 'admin1@email.com',
            'password' => Hash::make('Jv3g13830'),
            'address' => 'Ha Noi',
            'phone' => '011111',
        ]);

        $role = Role::create(['name' => 'Admin1']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
