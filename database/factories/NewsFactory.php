<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => 1,
            'author_id' => 1,
            'title' => fake()->jobTitle(),
            'status' => 'ACTIVE',
            'image' => fake()->url(),
            'description' => fake()->text(100)
        ];
    }
}
