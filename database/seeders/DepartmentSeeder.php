<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = [
            'Khoa thần kinh',
            'Khoa tim mạch',
            'Khoa xương khớp',
            'Khoa nội tiết',
            'Khoa Nhi',
        ];

        foreach ($department as $dp) {
            Department::create(['name' => $dp]);
        }
    }
}
