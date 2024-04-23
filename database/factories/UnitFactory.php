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
            'description' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                            ->map(fn($p) => "<p>$p</p>")
                            ->implode(''),
            'category_id' => mt_rand(1, 2)
        ];
    }
}
