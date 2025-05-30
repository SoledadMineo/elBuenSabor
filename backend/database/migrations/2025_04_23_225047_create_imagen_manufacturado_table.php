<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('imagenes_manufacturados', function (Blueprint $table) {
            $table->id();
            $table->string('denominacion');
            $table->unsignedBigInteger('articulo_manufacturado_id');
            $table->foreign('articulo_manufacturado_id')->references('id')->on('articulos_manufacturados')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('imagenes_manufacturados');
    }
};
