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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table-> string('username');
            $table->string('password');
<<<<<<< HEAD:database/migrations/2024_05_08_103000_create_users_table.php
            $table->enum('role', ['Client', 'Mechanic', 'Admin']);
            $table->rememberToken();
=======
            $table->string('email');
            $table->string('role');
>>>>>>> eeedc205a40a5ebed69ce52162a1d28c0885d139:database/migrations/2014_10_12_000000_create_users_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
