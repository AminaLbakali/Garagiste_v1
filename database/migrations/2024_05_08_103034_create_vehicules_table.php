<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2024_05_08_103034_create_vehicules_table.php
            $table->string('Marque');
            $table->string('Modele');
            $table->string('Type_carburant');
            $table->string('numero_immatriculation');
            $table->string('Picture');
=======
            $table->string('marke');
            $table->string('model');
            $table->string('fuelType');
            $table->string('registration');
>>>>>>> eeedc205a40a5ebed69ce52162a1d28c0885d139:database/migrations/2024_05_08_103450_create_vehicules_table.php
            $table->unsignedBigInteger('clientID');
            $table->foreign('clientID')->references('id')->on('clients')->onDelete('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
