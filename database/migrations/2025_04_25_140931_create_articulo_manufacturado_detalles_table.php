<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('articulo_manufacturado_detalles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('articulo_manufacturado_id')->constrained()->onDelete('cascade');
            $table->foreignId('articulo_insumo_id')->constrained()->onDelete('cascade');
            $table->double('cantidad');
            $table->timestamps();
    });

    }

    public function down()
    {
        Schema::dropIfExists('articulo_manufacturado_detalles');
    }
};
