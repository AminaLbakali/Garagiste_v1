<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
       // \App\Models\Facture::factory(5)->create();
       // \App\Models\Mecanicien::factory(1)->create();
       // \App\Models\Reparation::factory(3)->create();
       // \App\Models\Vehicule::factory(5)->create();
       // \App\Models\RendezVous::factory(5)->create();
       // \App\Models\PiecesRechange::factory(5)->create();
        \App\Models\Client::factory()->create([
          'nom' => 'amin',
          'prenom'=>'wer',
           'adresse' => '123 anywehere street',
           'numero_telephone' => '123456789',
           'adresse_email' => 'adminuser@example.com',
           'userID' => 1,
=======
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
>>>>>>> eeedc205a40a5ebed69ce52162a1d28c0885d139
        ]);

       \App\Models\User::factory()->create([
           'name' => 'client',
           'email' => 'clientuser@example.com',
           'password' => Hash::make('password'),
           'role' => "client"
          ]);


    }
}
