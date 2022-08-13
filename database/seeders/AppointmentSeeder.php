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
        $limit = 50;
        // user->id random from 1 to 10
        // hospital_id random from 1 to 4
        // department_id random from 1 to 5
        // self_check_symptom string
        // date greater than current date, max 2 months
        // time
        // doctor_id random from 1 to 50
        // status reandom (Pending, Accepted, Rejected, Cancelled)
        for ($i = 0; $i < $limit; $i++) {
            $appointment = new Appointment();
            $appointment->user_id = rand(6, 16);
            $appointment->hospital_id = rand(1, 4);
            $appointment->department_id = rand(1, 5);
            $appointment->doctor_id = rand(1, 50);
            $appointment->self_check_symptom = $faker->sentence;
            $appointment->date = $faker->dateTimeBetween('now', '+2 months')->format('Y-m-d');
            $appointment->time = $faker->time('H:i:s');
            $appointment->status = $faker->randomElement(['Accepted', 'Cancelled', 'Done']);
            $appointment->save();
        }
    }
}
