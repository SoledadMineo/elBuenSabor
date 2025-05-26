<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('facturas_ventas', function (Blueprint $table) {
            $table->id();
            $table->date('fechaFacturacion');
            $table->integer('numeroComprobante');
            $table->enum('formaPago', array_column(FormaPago::cases(), 'value'));
            //$table->enum('formaPago', ['EFECTIVO', 'MERCADO PAGO']);
            $table->decimal('subtotal', 10, 2);
            $table->decimal('descuento', 10, 2);
            $table->decimal('gastosEnvio', 10, 2);
            $table->decimal('totalVenta', 10, 2);
            $table->unsignedBigInteger('pedido_venta_id');
            $table->foreign('pedido_venta_id')->references('id')->on('pedido_venta')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('facturas_ventas');
    }
};
