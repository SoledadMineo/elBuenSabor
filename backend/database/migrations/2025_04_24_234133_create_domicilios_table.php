<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->id();
            $table->string('calle');
            $table->integer('numero');
            $table->integer('cp');
            // $table->unsignedBigInteger('sucursal_empresa_id');
            // $table->foreign('sucursal_empresa_id')->references('id')->on('sucursalEmpresas')->onDelete('cascade');
            // $table->unsignedBigInteger('cliente_id');
            // $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->unsignedBigInteger('localidad_id');
            $table->foreign('localidad_id')->references('id')->on('localidad')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('domicilios');
    }
};
