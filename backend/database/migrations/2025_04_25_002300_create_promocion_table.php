<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('promocion', function (Blueprint $table) {
            $table->id();
            $table->string('denominacion');
            $table->date('fecha_desde');
            $table->date('fecha_hasta');
            $table->double('descuento');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('promocion');
    }
};
