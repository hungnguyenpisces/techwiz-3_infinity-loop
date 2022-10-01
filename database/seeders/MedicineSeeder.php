<?php

namespace Database\Seeders;

use App\Models\MedicinePill;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        // check_out_history_id
        // details random 3 element from array
        // conclusion
        $limit = 1000;
        for ($i = 0; $i < $limit; $i++) {
            MedicinePill::create([
                'medicine'=>$faker->randomElement(['Paracetamol', 'Aspirin', 'Ibuprofen', 'Naproxen', 'Diclofenac', 'Acetaminophen', 'Ketoprofen', 'Dipyrone', 'Nimesulide', 'Mefenamic acid', 'Meloxicam', 'Celecoxib', 'Indomethacin', 'Naproxen', 'Diclofenac', 'Acetaminophen', 'Ketoprofen', 'Dipyrone', 'Nimesulide', 'Mefenamic acid', 'Meloxicam', 'Celecoxib', 'Indomethacin', 'Naproxen', 'Diclofenac', 'Acetaminophen', 'Ketoprofen', 'Dipyrone', 'Nimesulide', 'Mefenamic acid', 'Meloxicam', 'Celecoxib', 'Indomethacin', 'Naproxen', 'Diclofenac', 'Acetaminophen', 'Ketoprofen', 'Dipyrone', 'Nimesulide', 'Mefenamic acid', 'Meloxicam', 'Celecoxib', 'Indomethacin', 'Naproxen', 'Diclofenac', 'Acetaminophen', 'Ketoprofen', 'Dipyrone', 'Nimesulide', 'Mefenamic acid', 'Meloxicam', 'Celecoxib', 'Indomethacin', 'Naproxen', 'Diclofenac', 'Acetaminophen', 'Ketoprofen', 'Dipyrone', 'Nimesulide', 'Mefenamic acid', 'Meloxicam', 'Celecoxib', 'Indomethacin', 'Naproxen', 'Diclofenac', 'Acetaminophen', 'Ketoprofen', 'Dipyrone', 'Nimesulide', 'Mefenamic acid', 'Meloxicam', 'Celecoxib', 'Indomethacin', 'Naproxen', 'Diclofenac', 'Acetaminophen', 'Ketoprofen', 'Dipyrone', 'Nimesulide', 'Mefenamic acid', 'Meloxicam', 'Celecoxib', 'Indomethacin']),
                'quantity'=>$faker->numberBetween(1, 10),
                'price'=>$faker->numberBetween(10000, 100000),
                'instruction'=>$faker->randomElement(['Ăn trước', 'Ăn sau', 'Ăn cùng', 'Ăn trước hoặc sau']),
                'check_out_history_id'=>$faker->numberBetween(1, 300),
            ]);
        }
    }
}
