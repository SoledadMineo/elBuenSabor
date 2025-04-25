<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('promocion_detalles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('promocion_id');
            $table->string('detalle');
            $table->timestamps();

            // Relación con Promoción
            $table->foreign('promocion_id')->references('id')->on('promociones')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('promocion_detalles');
    }
};
