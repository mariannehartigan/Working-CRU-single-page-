<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => fake()->company(),
            'amount' => fake()->numberBetween(10, 1700),
            'frequency' => fake()->randomElement(['Weekly', 'Monthly', 'Quarterly', 'Yearly']),
            'day_due' => fake()->numberBetween(1,31),
            'notes' => fake()->sentence(),
        ];
    }
}
