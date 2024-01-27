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
            'date1' => fake()->date('after:now'),
            'date2' => fake()->date('after:date1'),
            'days' => fake()->numberBetween(1, 10),
            'total' => fake()->numberBetween(5000, 150000),
            'car_id' => Car::all()->random()->id,
        ];
    }
}
