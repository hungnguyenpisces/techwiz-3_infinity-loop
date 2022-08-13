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
        // first_name
        // last_name
        // hospital_id random from 1 to 10
        // gender random from male female
        // date_of_birth less than 20 years from now
        // username
        // email
        // phone
        // address
        // password
        $faker = Factory::create();
        $limit = 10;
        for ($i = 0; $i < $limit; $i++) {
            Staff::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'hospital_id' => $faker->numberBetween(1, 10),
                'gender' => $faker->randomElement(['Male', 'Female']),
                'phone' => $faker->phoneNumber,
                'address' => $faker->city,
                'username' => $faker->userName,
                'email' => $faker->email,
                'password' => Hash::make('12345678'),
                'date_of_birth' => $faker->dateTimeBetween('-20 years', '-18 years')
            ]);
        }
    }
}
