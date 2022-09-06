<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $user = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Super',
            'username' => 'superadmin',
            'email' => 'superadmin@email.com',
            'password' => Hash::make('Jv3g13830'),
            'phone' => $faker->phoneNumber,
            'address' => $faker->city,
            'gender' => $faker->randomElement(['Male', 'Female']),
            'blood_group' => $faker->randomElement(['O', 'A', 'B', 'AB']),
            'date_of_birth' => $faker->dateTimeBetween('-50 years', '-18 years'),
        ]);

        $role = Role::create(['name' => 'Super-Admin']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
