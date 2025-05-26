<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('promociones_detalles', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->unsignedBigInteger('promocion_id');
            $table->foreign('promocion_id')->references('id')->on('promociones')->onDelete('cascade');
            $table->unsignedBigInteger('articulo_manufacturado_id');
            $table->foreign('articulo_manufacturado_id')
                ->references('id')->on('articulos_manufacturados')
                ->onDelete('cascade');
            $table->unsignedBigInteger('articulo_insumo_id');
            $table->foreign('articulo_insumo_id')
                ->references('id')->on('articulos_insumos')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('promociones_detalles');
    }
};
