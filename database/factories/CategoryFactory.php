<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => implode(' ', $this->faker->words(2)),
            'meta_title' => implode(' ', $this->faker->words(5)),
            'path' => implode('-', $this->faker->words(5)),
        ];
    }
}
