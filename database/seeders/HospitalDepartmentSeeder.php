<?php

namespace Database\Seeders;

use App\Models\HospitalDepartment;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HospitalDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // hospital_id random from 1 to 10
        // department_id random from 1 to 10

        $faker = Factory::create();
        $limit = 200;
        for ($i = 0; $i < $limit; $i++) {
            HospitalDepartment::create([
                'hospital_id' => $faker->numberBetween(1, 10),
                'department_id' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
