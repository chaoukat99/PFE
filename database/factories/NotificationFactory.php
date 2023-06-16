<?php

namespace Database\Factories;

use App\Models\Expert;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content'=>fake()->text(),
            'status'=>fake()->randomElement(['confirmed','refused']),
            'experts_id'=>Expert::factory(),
            'user_id'=>User::factory(),
            'sentTo'=>fake()->randomElement(['admin', 'client', 'expert']),
            'sentBy'=>fake()->randomElement(['admin', 'client', 'expert'])

        ];
    }
}
