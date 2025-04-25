<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sucursal_empresa', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('horarioApertura');
            $table->string('horarioCierre');
            $table->unsignedBigInteger('domicilio_id')->unique()->nullable();
            $table->foreign('domicilio_id')->references('id')->on('domicilio')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sucursal_empresa');
    }
};
