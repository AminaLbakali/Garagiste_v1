<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
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
        'prenom'=>fake()->name(),
        'adresse'=>fake()->address(),
        'numero_telephone'=>fake()->phoneNumber(),
        'adresse_email'=>fake()->unique()->safeEmail(),
        ];
    }
}
