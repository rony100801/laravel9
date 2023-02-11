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
            'title' => $this->faker->sentence(mt_rand(1, 2)),
            'slug' => $this->faker->slug(),
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem aliquam iste vitae, quam et placeat?',
            // 'body' => '<p>' . implode('<p></p>', $this->faker->paragraphs(mt_rand(10, 12))) . '>/p>',
            'body' => collect($this->faker->paragraphs(mt_rand(10, 12)))
                ->map(fn ($p) => "<p>$p</p>")->implode(''),
            'category_id' => mt_rand(1, 4),
            'user_id' => mt_rand(1, 4)
        ];
    }
}
