<?php

namespace Database\Factories;

use App\Models\Car;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->email(),
            'address' => fake()->address(),
            'telephone' => fake()->phoneNumber(),
            'date1' => fake()->dateTimeBetween('-1 week', '+1 week')->format('Y-m-d'),
            'date2' => fake()->dateTimeBetween('+1 week', '+5 week')->format('Y-m-d'),
            'days' => fake()->numberBetween(1, 31),
            'total' => fake()->numberBetween(5000, 1500000),
            'car_id' => Car::all()->random()->id,
        ];
    }
}
