<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('factura_venta_pedido_venta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('factura_venta_id');
            $table->unsignedBigInteger('pedido_venta_id');
            $table->foreign('factura_venta_id')->references('id')->on('factura_venta')->onDelete('cascade');
            $table->foreign('pedido_venta_id')->references('id')->on('pedido_venta')->onDelete('cascade');
            $table->unique(['factura_venta_id', 'pedido_venta_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('factura_venta_pedido_venta');
    }
};
