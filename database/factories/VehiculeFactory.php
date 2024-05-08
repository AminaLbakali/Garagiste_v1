<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicule>
 */
class VehiculeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Marque'=>fake()->name(),
            'Modele'=>fake()->name(),
            'Type_carburant'=>fake()->name(),
            'numero_immatriculation'=>fake()->name(),
            'Picture'=>fake()->imageUrl(),
        ];
    }
}
