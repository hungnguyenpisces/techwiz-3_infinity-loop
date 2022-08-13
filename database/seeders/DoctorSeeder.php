<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $limit = 50;
        // first_name
        // last_name
        // position random ['Doctor', 'Nurse', 'Receptionist', 'Pharmacist', 'Laboratory' ]
        // department_id random from 1 to 20

        for ($i = 0; $i < $limit; $i++) {
            Doctor::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'position' => $faker->randomElement(['Doctor', 'Nurse', 'Receptionist', 'Pharmacist', 'Laboratory']),
                'department_id' => $faker->numberBetween(1, 20)
            ]);
        }
    }
}
