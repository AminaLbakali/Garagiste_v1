<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PiecesRechange>
 */
class PiecesRechangeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom'=>fake()->name(),
            'reference'=>fake()->name(),
            'fournisseur'=>fake()->name(),
            'prix'=>fake()->randomNumber(4),
            'stock'=>fake()->randomNumber(4),
        ];
    }
}
