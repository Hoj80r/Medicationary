<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function Laravel\Prompts\password;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Hojat Rasti',
             'email' => 'hojat@rasti.com',
             'mobile' => '09021885547',
             'role' => 'admin',
             'password' => '123456789123456'
     ]);
    }
}
