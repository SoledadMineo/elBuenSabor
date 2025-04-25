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
            $table->string('horarioApertura');
            $table->unsignedBigInteger('horarioCierre');
            $table->timestamps();
        
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
        });        
    }

    public function down()
    {
        Schema::dropIfExists('sucursal_empresa');
    }
};
