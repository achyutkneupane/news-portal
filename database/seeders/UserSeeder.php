<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'role' => 'admin',
            'email' => 'achyutkneupane@gmail.com',
            'name' => 'Achyut Neupane'
        ]);
        User::factory()->create([
            'role' => 'editor',
            'email' => 'editor@gmail.com',
            'name' => 'Article Editor'
        ]);
        User::factory()->create();
    }
}
