<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('articulos_manufacturados', function (Blueprint $table) {
            $table->id();
            $table->string('denominacion');
            $table->string('descripcion');
            $table->decimal('precioVenta', 10, 2);
            $table->decimal('precioCosto', 10, 2);
            $table->integer('tiempoEstimado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('articulos_manufacturados');
    }
};
