<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('categorias_articulos', function (Blueprint $table) {
            $table->id();
            $table->string('denominacion');
            $table->foreignId('categoria_padre_id')->nullable()->constrained('categoria_articulos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categorias_articulos');
    }
};
