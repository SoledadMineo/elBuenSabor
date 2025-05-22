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
            $table->foreignId('promocion_id')->constrained()->onDelete('cascade');
            $table->foreignId('articulo_manufacturado_id')->constrained()->onDelete('cascade');
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('promocion_detalles');
    }
};
