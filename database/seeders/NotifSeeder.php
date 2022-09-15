<?php


namespace Database\Seeders;

use App\Models\Notification;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class NotifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();
        $limit = 500;
        for ($i = 0; $i < $limit; $i++) {
            Notification::create([
                'user_id' => $faker->numberBetween(1, 300),
                //1.medicine, 2. appointment, 3 update health index

                'content' => $faker->randomElement([
                    ' You have a new appointment with Dr. Hung at 9:00 AM on 2021-09-10',
                    ' You have a new appointment with Dr. Ngan at 9:00 AM',
                    ' You have a new appointment with Dr. Giang at 9:00 AM' ,
                    ' You have a new appointment with Dr. Huy at 9:00 AM',
                    ' Dont forget to take your medicine on time',
                    ' You have not updated your health index this week. Update it now!'

                ]),
                'type' => $faker->randomElement([1,2,3]),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
            ]);
        }

    }
}
