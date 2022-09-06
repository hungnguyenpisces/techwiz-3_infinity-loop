<?php

namespace Database\Seeders;

use App\Models\HealthIndex;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HealthIndexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $limit = 105;
        // users_id
        // height
        // weight
        // heart_rate
        // blood_pressure
        for ($i = 0; $i < $limit; $i++) {
            HealthIndex::create([
                'user_id' => $i + 1,
                'height' => $faker->numberBetween(150, 200),
                'weight' => $faker->numberBetween(50, 100),
                'heart_rate' => $faker->numberBetween(50, 100),
                'blood_pressure' => $faker->numberBetween(50, 100),
            ]);
        }
    }
}
