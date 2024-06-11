<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Unit>
 */
class UnitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => $this->faker->slug,
            'name' => $this->faker->sentence(mt_rand(2, 3)),
            'price' => $this->faker->numberBetween(100, 300),
            'capacity' => $this->faker->numberBetween(2, 10),
            'description' => $this->faker->paragraph(),
            'category_id' => mt_rand(1, 2),
            'steering' => $this->faker->randomElement(['Manual', 'Matic']),
        ];
    }
}
