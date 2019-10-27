<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(\App\User::class, 100)->create();
        //@TODO for text
        factory(\App\Post::class, 1500)->create();

        //@TODO for video type
//        factory(\App\Post::class, 500)->create();

        factory( \App\Category::class, 10)->create();
        factory( \App\Tag::class, 50)->create();


        factory( \App\Image::class, 2500)->create();
        factory( \App\Video::class, 500)->create();
        factory( \App\Comment::class, 2500)->create();
    }
}
