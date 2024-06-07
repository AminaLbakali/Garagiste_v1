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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('numero_telephone');
            $table->string('adresse_email');
=======
            $table->string('firstName'); 
            $table->string('lastName');
            $table->string('address');
            $table->string('phoneNumber');
>>>>>>> eeedc205a40a5ebed69ce52162a1d28c0885d139
            $table->unsignedBigInteger('userID');
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
