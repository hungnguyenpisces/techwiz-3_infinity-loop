<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $limit = 900;
        for ($i = 0; $i < $limit; $i++) {
            Appointment::create([
                'user_id' => rand(1, 100),
                'hospital_id' => rand(1, 10),
                'department_id' => rand(1, 20),
                'doctor_id' => rand(1, 50),
                'self_check_symptom' => $faker->sentence,
                'date' => $faker->dateTimeBetween('now', '+12 months')->format('Y-m-d'),
                'time' => $faker->time('H:i:s'),
                'status' => $faker->randomElement(['Accepted', 'Cancelled', 'Done']),
                'created_at' => $faker->dateTimeBetween('-1 years', '-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now'),
            ]);
        }
    }
}
