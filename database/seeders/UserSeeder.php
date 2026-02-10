<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'kelompok6',
            'email' => 'laravelkelompok@gmail.com',
            'password' => Hash::make('semoga_bli_error12'),
        ]);

        User::create([
            'name' => 'User Biasa',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password123'),
        ]);
    }
}