<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $limit = 100;
        for ($i = 0; $i < $limit; $i++) {
            Notification::create ([
                'user_id' => $faker->numberBetween(1, 200),
                'content' => $faker->numberBetween(50, 100),
                'type' => $faker->numberBetween(1, 4),
            ]);
        }
    }
}
