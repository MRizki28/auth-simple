<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create(array(
            'id' => rand(100, 500),
            'name' => 'Admin Pena',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
        ));
    }
}
