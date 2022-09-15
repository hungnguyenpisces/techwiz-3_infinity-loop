<?php

namespace Database\Seeders;

use App\Models\FAQ;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $limit = 7;
        for ($i = 0; $i < $limit; $i++) {
            FAQ::create([
                'question' => $faker->sentence,
                'answer' => $faker->sentence,
                'created_at' => $faker->dateTimeBetween('-1 years', '-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now'),
            ]);
        }

    }
}
