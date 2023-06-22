<?php

namespace Database\Factories;

use App\Models\Expert;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->title(),
            'content'=>fake()->text(),
            'likes'=>fake()->numberBetween(0,100),
            'expert_id'=>Expert::factory()
        ];
    }
}
