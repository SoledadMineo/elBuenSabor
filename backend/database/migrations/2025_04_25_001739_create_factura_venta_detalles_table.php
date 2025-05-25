<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('factura_venta_detalles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('factura_venta_id')->constrained()->onDelete('cascade');
            $table->foreignId('articulo_manufacturado_id')->constrained()->onDelete('cascade');
            $table->integer('cantidad');
            $table->decimal('sub_total', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('factura_venta_detalles');
    }
};
