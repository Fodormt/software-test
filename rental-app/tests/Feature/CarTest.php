<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Car;

class CarTest extends TestCase
{
    use RefreshDatabase;

    public function testActiveCar()
    {
        // Create an active car
        $car = Car::factory()->create(['is_active' => true]);

        // Assert that the car is active in the database
        $this->assertDatabaseHas('cars', ['id' => $car->id, 'is_active' => true]);
    }

    public function testInactiveCar()
    {
        // Create an inactive car
        $car = Car::factory()->create(['is_active' => false]);

        // Assert that the car is inactive in the database
        $this->assertDatabaseHas('cars', ['id' => $car->id, 'is_active' => false]);
    }
}
