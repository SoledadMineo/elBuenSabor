<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pedido_venta', function (Blueprint $table) {
            $table->id();
            $table->dateTime('horaEstimadaFinalizacion')->nullable();
            $table->decimal('subtotal', 10, 2);
            $table->decimal('descuento', 10, 2);
            $table->decimal('gastosEnvio', 10, 2);
            $table->decimal('total', 10, 2);
            $table->decimal('totalCosto', 10, 2);
            $table->enum('estado', ['PENDIENTE', 'EN_PROCESO', 'FINALIZADO', 'CANCELADO']);
            $table->enum('tipoEnvio', ['DELIVERY', 'RETIRO']);
            $table->enum('formaPago', ['EFECTIVO', 'TARJETA', 'TRANSFERENCIA']);
            $table->date('fechaPedido');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedido_ventas');
    }
};
