<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('email');
            $table->enum('perfil', ['ADMIN', 'VENDEDOR', 'ENCARGADO']); // podés ajustar los roles
            $table->unsignedBigInteger('usuario_id')->unique()->nullable();
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
