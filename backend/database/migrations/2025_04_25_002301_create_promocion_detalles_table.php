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
            $table->integer('cantidad');
            $table->timestamps();
            $table->unsignedBigInteger('promocion_id');

            // Relación con Promoción
            $table->foreign('promocion_id')->references('id')->on('promocion')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('promocion_detalles');
    }
};
