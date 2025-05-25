<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursal_insumos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('sucursal_empresa_id');
            $table->unsignedBigInteger('articulo_insumo_id');

            $table->integer('stock_actual')->default(0);
            $table->integer('stock_minimo')->default(0);
            $table->integer('stock_maximo')->default(0);

            $table->timestamps();

            $table->foreign('sucursal_empresa_id')->references('id')->on('sucursal_empresas')->onDelete('cascade');
            $table->foreign('articulo_insumo_id')->references('id')->on('articulo_insumos')->onDelete('cascade');
            $table->unique(['sucursal_empresa_id', 'articulo_insumo_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('sucursal_insumos');
    }
};
