<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoVenta extends Model
{
    use HasFactory;

    protected $table = 'pedidos_ventas';

    protected $fillable = [
        'horaEstimadaFinalizacion',
        'subtotal',
        'descuento',
        'gastosEnvio',
        'total',
        'totalCosto',
        'estado',
        'tipoEnvio',
        'formaPago',
        'fechaPedido',
        'sucursal_empresa_id',
        'empleado_id',
        'cliente_id'
    ];

    public function sucursalEmpresa()
    {
        return $this->belongsTo(SucursalEmpresa::class);
    }
}
