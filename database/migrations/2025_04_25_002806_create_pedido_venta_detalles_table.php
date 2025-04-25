<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pedido_venta_detalles', function (Blueprint $table) {
            $table->id();
            $table->decimal('cantidad', 10, 2);
            $table->decimal('subtotal', 10, 2);
            $table->unsignedBigInteger('promocion_id')->nullable();
            $table->foreign('promocion_id')->references('id')->on('promociones')->onDelete('set null');
            $table->unsignedBigInteger('pedido_venta_id');
            $table->foreign('pedido_venta_id')->references('id')->on('pedido_venta')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedido_venta_detalles');
    }
};
