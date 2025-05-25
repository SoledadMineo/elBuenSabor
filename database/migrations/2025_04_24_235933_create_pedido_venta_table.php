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
            $table->enum('estado', ['PREPARACION', 'PENDIENTE', 'CANCELADO', 'RECHAZADO', 'ENTREGADO']);
            $table->enum('tipoEnvio', ['DELIVERY', 'TAKE AWAY']);
            $table->enum('formaPago', ['EFECTIVO', 'MERCADO PAGO']);
            $table->date('fechaPedido');
            $table->unsignedBigInteger('empleado_id');
            $table->unsignedBigInteger('cliente_id');

            $table->foreign('empleado_id')->references('id')->on('empleado')->onDelete('cascade');
            $table->foreign('cliente_id')->references('id')->on('cliente')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedido_ventas');
    }
};
