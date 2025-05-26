<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('categorias_articulos_manufacturados', function (Blueprint $table) {
            $table->id();
            $table->string('denominacion');
            $table->foreignId('articulo_manufacturado_id')->constrained('articulos_manufacturados')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categorias_articulos_manufacturados');
    }
};
