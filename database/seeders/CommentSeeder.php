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
                'app_id' => rand(1, 500),
                'doctor_rate' => rand(1, 5),
                'hospital_rate' => rand(1, 5),
                'department_rate' => rand(1, 5),
                'overall_rate' => rand(1,5),
                'content' => $faker->text(100),
                'created_at' => $faker->dateTimeBetween('-1 years', '-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
            ]);
        }
    }
}
