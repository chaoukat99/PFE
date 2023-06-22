<?php

namespace Database\Factories;

use App\Models\Expert;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Earning>
 */
class EarningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amount'=>fake()->numberBetween(100,800),
            'confirm_date'=>fake()->date(),
            'expert_id'=>Expert::factory()
        ];
    }
}
