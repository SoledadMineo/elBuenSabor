<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('facturas_ventas_detalles', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->decimal('sub_total', 10, 2);
            
            $table->foreignId('factura_venta_id')->constrained('facturas_ventas')->onDelete('cascade');
            $table->foreignId('articulo_manufacturado_id')->constrained('articulos_manufacturados')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('facturas_ventas_detalles');
    }
};
