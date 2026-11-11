<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin Boss',
            'email' => 'admin@test.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
            'age' => 20,
        ]);
        User::factory()->create([
            'name' => 'Adulto Cliente',
            'email' => 'adulto@test.com',
            'password' => Hash::make('password'),
            'is_admin' => false,
            'age' => 18,
        ]);
        User::factory()->create([
            'name' => 'Menor Cliente',
            'email' => 'menor@test.com',
            'password' => Hash::make('password'),
            'is_admin' => false,
            'age' => 16,
        ]);
    }
}