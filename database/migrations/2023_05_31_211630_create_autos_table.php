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
        // Marca, Modelo, Tipo (Camioneta, Auto)
        Schema::create('autos', function (Blueprint $table) {
            $table->id_auto();
            $table->string('marca');
            $table->string('modelo');
            $table->string('tipo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autos');
    }
};
