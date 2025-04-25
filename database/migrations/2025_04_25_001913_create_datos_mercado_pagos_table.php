<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('datos_mercado_pago', function (Blueprint $table) {
            $table->id();

            // Campos de MercadoPago
            $table->dateTime('date_created');
            $table->dateTime('date_approved')->nullable();
            $table->dateTime('date_last_updated')->nullable();
            $table->string('payment_type_id');
            $table->string('payment_method_id');
            $table->string('status');
            $table->string('status_detail');

            // Relación 1-a-1 con FacturaVenta
            $table->unsignedBigInteger('factura_venta_id')->unique();
            $table->foreign('factura_venta_id')
                ->references('id')->on('factura_venta')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('datos_mercado_pagos');
    }
};
