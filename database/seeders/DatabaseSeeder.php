<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();

        // User::factory()->create([        jätan, ei puudu
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create([
            'name' => 'John Doe',
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id,
        ]);


    }
}
