<?php

namespace Database\Seeders;

use App\Models\HospitalDepartment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HospitalDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // hospital_id, department_id
        $hospital_department = [
            ['1', '1'],
            ['1', '2'],
            ['1', '3'],
            ['1', '4'],
            ['1', '5'],
            ['2', '1'],
            ['2', '2'],
            ['2', '3'],
            ['2', '4'],
            ['2', '5'],
            ['3', '1'],
            ['3', '2'],
            ['3', '3'],
            ['3', '4'],
            ['3', '5'],
            ['4', '1'],
            ['4', '2'],
            ['4', '3'],
            ['4', '4'],
            ['4', '5'],
        ];
        foreach ($hospital_department as $hd) {
            HospitalDepartment::create([
                'hospital_id' => $hd[0],
                'department_id' => $hd[1],
            ]);
        }
    }
}
