<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Vinícius Santos',
            'email' => 'vinicius@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Ananda Rafaela',
            'email' => 'ananda@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
