<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;
use function Laravel\Prompts\password;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

//         $user = \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);

//         Post::factory(30)->has(Comment::factory(15))->for($user)->create();
//         Post::factory(30)->create();

         \App\Models\User::factory()->create([
             'name' => 'Hojat Rasti',
             'email' => 'hojat@rasti.com',
             'mobile' => '09021885547',
             'role' => 'admin',
             'password' => '123456789123456'
     ]);

    }
}
