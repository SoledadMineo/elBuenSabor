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
            $table->time('horarioCierre');  // Usamos 'time' para almacenar la hora de cierre
            $table->unsignedBigInteger('domicilio_id')->nullable();
            $table->unsignedBigInteger('empresa_id');
            $table->timestamps();

            // Claves foráneas
            $table->foreign('domicilio_id')->references('id')->on('domicilio')->onDelete('set null');
            $table->foreign('empresa_id')->references('id')->on('empresa')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sucursal_empresa');
    }
};
