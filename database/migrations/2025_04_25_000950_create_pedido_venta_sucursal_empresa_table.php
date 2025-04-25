<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pedido_venta_sucursal_empresa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pedido_venta_id');
            $table->unsignedBigInteger('sucursal_empresa_id');
            $table->foreign('pedido_venta_id')->references('id')->on('pedido_venta')->onDelete('cascade');
            $table->foreign('sucursal_empresa_id')->references('id')->on('sucursal_empresa')->onDelete('cascade');
            $table->unique(['pedido_venta_id', 'sucursal_empresa_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedido_venta_sucursal_empresa');
    }
};
