<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ngan = User::create([
            'first_name' => 'Ngan',
            'last_name' => 'Ha',
            'username' => 'ngan',
            'email' => 'nganha@email.com',
            'password' => Hash::make('12345678'),
        ]);
        $ngan->assignRole('Super-Admin');

        $giang = User::create([
            'first_name' => 'Giang',
            'last_name' => 'Ha',
            'username' => 'giang',
            'email' => 'hagiang@email.com',
            'password' => Hash::make('12345678'),
        ]);
        $giang->assignRole('Admin');

        $hiep = User::create([
            'first_name' => 'Hiep',
            'last_name' => 'Ha',
            'username' => 'hiep',
            'email' => 'hiemga@email.com',
            'password' => Hash::make('12345678'),
        ]);
        $hiep->assignRole('Admin');

        $huan = User::create([
            'first_name' => 'Huan',
            'last_name' => 'Ha',
            'username' => 'huan',
            'email' => 'huanhoahong@email.com',
            'password' => Hash::make('12345678'),
        ]);
        $huan->assignRole('User');

        $faker = Factory::create();
        $limit = 10;
        for ($i = 0; $i < $limit; $i++) {
            $user = User::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'username' => $faker->userName,
                'email' => $faker->email,
                'password' => Hash::make('12345678'),
            ]);
            $user->assignRole('User');
        }
    }
}
