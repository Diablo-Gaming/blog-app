<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'user');
        })->get();

        foreach ($users as $user) {

            Post::create([
                'title' => "{$user->username} First Post",
                'slug' => Str::slug("{$user->username} First Post"),
                'body' => "This is the first post created by {$user->username}.",
                'user_id' => $user->id,
            ]);

            Post::create([
                'title' => "{$user->username} Second Post",
                'slug' => Str::slug("{$user->username} Second Post"),
                'body' => "This is the second post created by {$user->username}.",
                'user_id' => $user->id,
            ]);
        }
    }
}
