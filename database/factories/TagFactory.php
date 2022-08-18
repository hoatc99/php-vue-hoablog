<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => \App\Models\Post::all()->random()->id,
            'tag' => implode(', ', $this->faker->words(3)),
        ];
    }
}
