<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('factura_venta', function (Blueprint $table) {
            $table->id();
            $table->date('fechaFacturacion');
            $table->integer('numeroComprobante');
            $table->enum('formaPago', ['EFECTIVO', 'MERCADO PAGO']);
            $table->decimal('subtotal', 10, 2);
            $table->decimal('descuento', 10, 2);
            $table->decimal('gastosEnvio', 10, 2);
            $table->decimal('totalVenta', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('factura_venta');
    }
};
