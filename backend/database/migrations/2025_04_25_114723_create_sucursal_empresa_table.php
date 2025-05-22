<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sucursal_empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->time('horarioApertura');
            $table->time('horarioCierre');
            $table->foreign('empresa_id')->references('id')->on('empresa')->onDelete('cascade');
            $table->foreign('domicilio_id')->references('id')->on('domicilio')->onDelete('set null');
            $table->timestamps();
        });        
    }

    public function down()
    {
        Schema::dropIfExists('sucursal_empresa');
    }
};
