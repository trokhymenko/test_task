<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'trip_id' => fake()->unique()->randomNumber(),
            'driver_id'=>fake()->randomNumber(),
            'pickup' => fake()->dateTime(),
            'dropoff' => fake()->dateTime()
        ];
    }
}
