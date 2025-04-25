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
            $table->unsignedBigInteger('factura_venta_id');
            $table->integer('cantidad');
            $table->decimal('sub_total', 10, 2);
            $table->timestamps();

            $table->foreign('factura_venta_id')->references('id')->on('factura_ventas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('factura_ventas');
    }
};
