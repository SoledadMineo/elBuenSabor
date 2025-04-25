<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('empleado_pedido_venta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('empleado_id');
            $table->unsignedBigInteger('pedido_venta_id');
            $table->foreign('empleado_id')->references('id')->on('empleado')->onDelete('cascade');
            $table->foreign('pedido_venta_id')->references('id')->on('pedido_venta')->onDelete('cascade');
            $table->timestamps();

            $table->unique(['empleado_id', 'pedido_venta_id']); // evita duplicados
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleado_pedido_venta');
    }
};
