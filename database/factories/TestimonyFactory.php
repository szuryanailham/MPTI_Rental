<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimony>
 */
class TestimonyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'  => $this->faker->name(),
            'rating' => number_format($this->faker->numberBetween(1, 5), 1),
            'description' => $this->faker->sentence(10, 20),
            'testimony_created_at' => now()
        ];
    }
}
