<?php

namespace Database\Seeders;

use App\Models\CheckOutHistory;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CheckoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $limit = 500;
        // users_id random from 6 to 106
        // department_id random from 1 to 20
        // hospital_id random from 1 to 10
        // symptoms string
        // conclusion string
        // staff_id random from 1 to 10
        // doctor_id random from 1 to 50

        for ($i = 0; $i < $limit; $i++) {
            CheckOutHistory::create([
                'user_id' => rand(1, 100),
                'department_id' => rand(1, 20),
                'hospital_id' => rand(1, 10),
                'symptoms' => $faker->sentence,
                'conclusion' => $faker->sentence,
                'staff_id' => rand(1, 10),
                'doctor_id' => rand(1, 50)
            ]);
        }
    }
}
