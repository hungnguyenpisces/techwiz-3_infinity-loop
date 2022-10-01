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
        'date' => $faker->dateTimeBetween('-12 months', '+2 weeks')->format('Y-m-d'),
        'time' => $faker->randomElement(['08:00:00', '08:30:00', '09:00:00', '09:30:00', '10:00:00', '10:30:00', '11:00:00', '11:30:00', '13:00:00', '13:30:00', '14:00:00', '14:30:00', '15:00:00', '15:30:00', '16:00:00', '16:30:00', '17:00:00', '17:30:00']),
        'status' => $faker->randomElement(['Accepted', 'Cancelled', 'Done']),
        'created_at' => $faker->dateTimeBetween('-12 months', '-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 months', 'now'),
      ]);
    }
  }
}
