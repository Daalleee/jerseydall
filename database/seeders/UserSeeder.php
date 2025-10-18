<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Pelanggan
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'pelanggan',
        ]);
    }
}
