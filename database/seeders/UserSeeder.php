<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name' => 'Ngan',
            'last_name' => 'Ha',
            'username' => 'nganha',
            'email' => 'nganha@email.com',
            'password' => Hash::make('12345678'),
        ]);
        $user->assignRole('User');
    }
}
