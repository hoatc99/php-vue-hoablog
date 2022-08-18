<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategoriesPostsTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");
        \App\Models\Post::truncate();
        \App\Models\Category::truncate();
        \App\Models\Tag::truncate();
        DB::statement("SET foreign_key_checks = 1");

        \App\Models\Category::factory(3)->create()->each(function ($category) {
            $category->posts()->saveMany(
                \App\Models\Post::factory(3)->create(['category_id' => $category->id])->each(function ($post) {
                    $post->tags()->saveMany(
                        \App\Models\Tag::factory(1)->create(['post_id' => $post->id])
                    );
                })
            );
        });
    }
}
