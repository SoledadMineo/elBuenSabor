<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('articulos_insumos', function (Blueprint $table) {
            $table->id();
            $table->string('denominacion');
            $table->decimal('precioCompra', 10, 2);
            $table->decimal('precioVenta', 10, 2);
            $table->boolean('esParaElaborar');
            $table->foreignId('unidad_medida_id')->constrained('')->onDelete('cascade');
            $table->foreignId('categoria_articulo_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('unidad_medida_id');
            $table->foreign('unidad_medida_id')->references('id')->on('unidades_medidas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos_insumos');
    }
};
