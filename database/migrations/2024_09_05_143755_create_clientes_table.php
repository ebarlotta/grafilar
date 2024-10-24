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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->bigInteger('dni');
            $table->string('email');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('geoposicion')->nullable();
            $table->string('organizacion')->nullable();
            // $table->sring('regdate') timestamp NULL DEFAULT NUL;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
