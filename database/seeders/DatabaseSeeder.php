<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Post;
use App\Models\PostCate;
use App\Models\Category;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create();

        Category::factory()->count(5)->create();

        Post::factory()
            ->count(10)
            ->has(PostCate::factory()->count(2), 'categories')
            ->has(Comment::factory()->count(3), 'comment')
            ->create();
    }
}
