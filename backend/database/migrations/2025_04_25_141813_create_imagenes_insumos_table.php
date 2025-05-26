<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('imagenes_insumos', function (Blueprint $table) {
            $table->id();
            $table->string('denominacion'); // o path de imagen
            $table->foreignId('articulo_insumo_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('imagenes_insumos');
    }
};
