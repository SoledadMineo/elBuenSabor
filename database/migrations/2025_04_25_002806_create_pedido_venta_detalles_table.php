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
            // Otros campos...
            $table->unsignedBigInteger('promocion_id')->nullable();
            $table->foreign('promocion_id')->references('id')->on('promociones')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedido_venta_detalles');
    }
};
