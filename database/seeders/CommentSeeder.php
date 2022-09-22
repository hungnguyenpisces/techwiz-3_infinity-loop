<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Comment;

class CommentSeeder extends Seeder
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
        for ($i = 0; $i < $limit; $i++) {
            Comment::create([
                'user_id' => rand(1, 100),
                'hospital_id' => rand(1, 10),
                'department_id' => rand(1, 20),
                'doctor_rate' => rand(1, 5),
                'hospital_rate' => rand(1, 5),
                'department_rate' => rand(1, 5),
                'overall_rate' => rand(1, 10),
                'content' => $faker->sentence,
                'created_at' => $faker->dateTimeBetween('-1 years', '-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
            ]);
        }
    }
}
