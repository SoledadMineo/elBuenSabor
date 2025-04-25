<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('imagen_insumos', function (Blueprint $table) {
            $table->id();
            $table->string('denominacion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('imagen_insumos');
    }
};
