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
        $departments = [
            'Anesthetics',
            'Breast Screening',
            'Cardiology',
            'Ear, nose and throat (ENT)',
            'Elderly services department',
            'Gastroenterology',
            'General Surgery',
            'Gynecology',
            'Hematology',
            'Neonatal Unit',
            'Neurology',
            'Nutrition and dietetics',
            'Obstetrics and gynecology units',
            'Oncology',
            'Ophthalmology',
            'Orthopedics',
            'Physiotherapy',
            'Renal Unit',
            'Sexual Health',
            'Urology',
        ];

        foreach ($departments as $department) {
            Department::create(['name' => $department]);
        }
    }
}
