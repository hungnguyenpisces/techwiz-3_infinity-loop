<?php

namespace Database\Seeders;

use App\Models\Staff;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $limit = 10;
        for ($i = 0; $i < $limit; $i++) {
            $staff = Staff::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'hospital_id' => $i + 1,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'phone' => $faker->phoneNumber,
                'address' => $faker->city,
                'username' => $faker->unique()->userName,
                'email' => $faker->email,
                'password' => Hash::make('12345678'),
                'date_of_birth' => $faker->dateTimeBetween('-20 years', '-18 years')
            ]);
            $staff->assignRole('Admin', 'Staff');
        }
    }
}
