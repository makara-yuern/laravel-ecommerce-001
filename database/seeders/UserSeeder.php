<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => fake()->name(),
                'email_verified_at' => now(),
                'password' => bcrypt('password1234'),
                'is_admin' => true,
            ]
        );

        User::updateOrCreate(
            ['email' => 'jujutsu@gmail.com'],
            [
                'name' => fake()->name(),
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'is_admin' => true,
            ]
        );

    }
}
