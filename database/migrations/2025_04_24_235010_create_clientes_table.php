<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('email');
            $table->unsignedBigInteger('domicilio_id')->unique()->nullable();
            $table->foreign('domicilio_id')->references('id')->on('domicilio')->onDelete('cascade');
            $table->unsignedBigInteger('usuario_id')->unique()->nullable();
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
