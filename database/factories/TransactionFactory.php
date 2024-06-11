<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'phone_number' => $this->faker->phoneNumber(),
            'pickup_address' => $this->faker->address(),
            'start_date' => $this->faker->dateTime(),
            // 'start_time' => $this->faker->time(),
            'end_date' => $this->faker->dateTime(),
            // 'end_time' => $this->faker-> time(),
            'duration' => mt_rand(1, 30),
            'total' => $this->faker->numberBetween(100, 300),
            'status' => $this->faker->randomElement(['open', 'close']),
            'unit_id' => mt_rand(1, 20)
        ];
    }
}
