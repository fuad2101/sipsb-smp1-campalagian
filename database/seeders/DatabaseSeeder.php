<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Ramli Syamsuddin',
            'email' => 'ramli_syamsuddin@gmail.com',
            'email_verified_at' => now(),
            'role' => 'vip',
            'password' => 'ramlisyamsuddin',
            'remember_token' => Str::random(10),
         ]);

        \App\Models\User::factory()->create([
            'name' => 'Muhammad Fuad',
            'email' => 'muhfuad67@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'password' => 'yudistar',
            'remember_token' => Str::random(10),
         ]);

         \App\Models\User::factory()->create([
            'name' => 'Multy Muradewi',
            'email' => 'multy_muradewi@gmail.com',
            'email_verified_at' => now(),
            'role' => 'user',
            'password' => 'multy',
            'remember_token' => Str::random(10),
         ]);

         \App\Models\User::factory()->create([
            'name' => 'Jhon Doe',
            'email' => 'jhondoe@gmail.com',
            'email_verified_at' => now(),
            'role' => 'user',
            'password' => 'jhondoe',
            'remember_token' => Str::random(10),
         ]);

         

    }
}
