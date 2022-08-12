<?php

namespace Database\Seeders;

use App\Models\Hospital;
use Illuminate\Database\Seeder;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hospital = [
            ['Bệnh viện Bạch Mai', 'Hà Nội', '0912345678', 'Nguyễn Văn A'],
            ['Bệnh viện Bạch Kia', 'Hà Nội', '0912345678', 'Nguyễn Văn A'],
            ['Bệnh viện Bạch Mot', 'Hà Nội', '0912345678', 'Nguyễn Văn A'],
            ['Bệnh viện Hắc Mai', 'Hà Nội', '0912345678', 'Nguyễn Văn A']
        ];

        foreach ($hospital as $h) {
            Hospital::create([
                'name' => $h[0],
                'location' => $h[1],
                'phone' => $h[2],
                'director' => $h[3]
            ]);
        }
    }
}
