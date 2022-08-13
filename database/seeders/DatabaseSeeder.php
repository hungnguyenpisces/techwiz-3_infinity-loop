<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionSeeder::class);
        $this->call(SuperAdminSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(HospitalSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(HospitalDepartmentSeeder::class);
        $this->call(AppointmentSeeder::class);
        $this->call(StaffSeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(CheckoutSeeder::class);
    }
}
