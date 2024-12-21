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
        Schema::create('sensores', function (Blueprint $table) {
            $table->id(); // ID único para el sensor
            $table->string('nombre'); // Nombre del sensor
            $table->string('tipo'); // Tipo del sensor
            $table->string('ubicacion'); // Ubicación del sensor
            $table->timestamps(); // Campos de timestamp para created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensores'); // Elimina la tabla si la migración es revertida
    }
};
