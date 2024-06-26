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
        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->longText('description');
=======
            $table->string('description');
>>>>>>> eeedc205a40a5ebed69ce52162a1d28c0885d139
            $table->string('status');
            $table->string('startDate');
            $table->string('endDate');
            $table->string('mechanicNotes');
            $table->string('clientNotes');
            $table->unsignedBigInteger('mechanicID');
            $table->unsignedBigInteger('vehicleID');
            $table->foreign('mechanicID')->references('id')->on('users')->onDelete('cascade');
<<<<<<< HEAD
            $table->foreign('vehicleID')->references('id')->on('vehicules')->onDelete('cascade');
=======
            $table->foreign('vehicleID')->references('id')->on('vehicles')->onDelete('cascade');
>>>>>>> eeedc205a40a5ebed69ce52162a1d28c0885d139
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reparations');
    }
};
