<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('articulo_insumos', function (Blueprint $table) {
            $table->id(); // Crea el campo 'id' como clave primaria
            $table->string('denominacion');
            $table->decimal('precioCompra', 10, 2);
            $table->decimal('precioVenta', 10, 2);
            $table->boolean('esParaElaborar');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('articulo_insumos');
    }
};
