<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(mt_rand(2, 8)),
            'slug' => fake()->slug(),
            'excerpt' => fake()->paragraph(),
            // 'body' => $this->faker->paragraphs(mt_rand(3, 7)),
            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(3, 7))) . '</p>',
            'user_id' => mt_rand(1, 15),
            'category_id' => mt_rand(1, 3)
        ];
    }
}
