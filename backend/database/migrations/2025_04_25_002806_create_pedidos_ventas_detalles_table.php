<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pedidos_ventas_detalles', function (Blueprint $table) {
            $table->id();
            $table->decimal('cantidad', 10, 2);
            $table->decimal('subtotal', 10, 2);
            $table->foreignId('pedido_venta_id')->constrained('pedidos_ventas')->onDelete('cascade');
            $table->foreignId('articulo_manufacturado_id')->constrained('articulos_manufacturados')->onDelete('cascade');
            $table->unsignedBigInteger('promocion_id')->nullable();
            $table->foreign('promocion_id')->references('id')->on('promociones')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedidos_ventas_detalles');
    }
};
