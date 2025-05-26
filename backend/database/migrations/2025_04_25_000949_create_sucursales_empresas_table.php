<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sucursales_empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('horarioApertura');
            $table->time('horarioCierre');  // Usamos 'time' para almacenar la hora de cierre
            $table->unsignedBigInteger('empresa_id');
            $table->unsignedBigInteger('domicilio_id')->nullable();
            $table->timestamps();

            // Claves foráneas
            $table->foreign('domicilio_id')->references('id')->on('domicilios')->onDelete('set null');
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sucursales_empresas');
    }
};
