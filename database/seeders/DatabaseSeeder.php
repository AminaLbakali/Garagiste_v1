<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Client::factory(5)->create();
        // \App\Models\Facture::factory(5)->create();
        // \App\Models\Mecanicien::factory(5)->create();
        // \App\Models\Reparation::factory(5)->create();
        // \App\Models\Vehicule::factory(5)->create();
        // \App\Models\RendezVous::factory(5)->create();
        // \App\Models\PiecesRechange::factory(5)->create();
        \App\Models\User::factory()->create([
           'username' => 'Test User client',
           'email' => 'testclient@example.com',
           'password' =>'password',
           'role' => 'client'
        ]);
    }
}
