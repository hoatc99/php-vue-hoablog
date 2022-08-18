<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => \App\Models\Category::all()->random()->id,
            'user_id' => 1,
            'title' => implode(' ', $this->faker->words(10)),
            'meta_title' => implode(' ', $this->faker->words(15)),
            'path' => implode('-', $this->faker->words(15)),
            'summary' => $this->faker->sentence,
            'content' => $this->faker->paragraph(5),
            'main_image_url' => implode('-', $this->faker->words(5)) . '.jpg',
            'alt_image_url' => implode('-', $this->faker->words(5)) . '.jpg',
        ];
    }
}
