<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pedidos_ventas', function (Blueprint $table) {
            $table->id();
            $table->dateTime('horaEstimadaFinalizacion')->nullable();
            $table->decimal('subtotal', 10, 2);
            $table->decimal('descuento', 10, 2);
            $table->decimal('gastosEnvio', 10, 2);
            $table->decimal('total', 10, 2);
            $table->decimal('totalCosto', 10, 2);
            $table->enum('estado', array_column(RolEstado::cases(), 'value'));
            //$table->enum('estado', ['PREPARACION', 'PENDIENTE', 'CANCELADO', 'RECHAZADO', 'ENTREGADO']);
            $table->enum('tipoEnvio', array_column(RolTipoEnvio::cases(), 'value'));
            //$table->enum('tipoEnvio', ['DELIVERY', 'TAKE AWAY']);
            $table->enum('formaPago', array_column(RolFormaPago::cases(), 'value'));
            //$table->enum('formaPago', ['EFECTIVO', 'MERCADO PAGO']);
            $table->date('fechaPedido');
            $table->foreignId('sucursal_empresa_id')->constrained('sucursales_empresas')->onDelete('cascade');
            $table->foreignId('empleado_id')->constrained('empleados')->onDelete('cascade');
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');

            // $table->unsignedBigInteger('sucursal_empresa_id');
            // $table->unsignedBigInteger('empleado_id');
            // $table->unsignedBigInteger('cliente_id');
            // $table->foreign('sucursal_empresa_id')->references('id')->on('sucursal_empresas')->onDelete('cascade');
            // $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade');
            // $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedidos_ventas');
    }
};
