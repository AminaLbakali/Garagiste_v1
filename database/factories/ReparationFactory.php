<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reparation>
 */
class ReparationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description'=>fake()->text(),
            'status'=>fake()->randomElement(['En cours', 'Termine']),
            'startDate'=>fake()->date(),
            'endDate'=>fake()->date(),
            'mechanicNotes'=>fake()->text(),
            'clientNotes'=>fake()->text(),
            'mechanicID'=>fake()->numberBetween(1, 10),
            'vehicleID'=>fake()->numberBetween(1, 10),

        ];
    }
}
