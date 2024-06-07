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
        Schema::create('reparations', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->string('status');
            $table->string('startDate');
            $table->string('endDate');
            $table->string('mechanicNotes');
            $table->string('clientNotes');
            $table->unsignedBigInteger('mechanicID');
            $table->unsignedBigInteger('vehicleID');
            $table->foreign('mechanicID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('vehicleID')->references('id')->on('vehicules')->onDelete('cascade');
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
