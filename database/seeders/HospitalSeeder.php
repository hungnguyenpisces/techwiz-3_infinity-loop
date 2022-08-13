<?php

namespace Database\Seeders;

use App\Models\Hospital;
use Faker\Factory;
use Illuminate\Database\Seeder;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // name
        // location
        // phone
        // director

        $faker = Factory::create();
        $limit = 10;
        for ($i = 0; $i < $limit; $i++) {
            Hospital::create([
                'name' => $faker->unique()->company,
                'location' => $faker->city,
                'phone' => $faker->phoneNumber,
                'director' => $faker->name
            ]);
        }
    }
}
