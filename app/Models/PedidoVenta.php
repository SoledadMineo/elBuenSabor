<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoVenta extends Model
{
    use HasFactory;

    protected $table = 'pedido_venta';

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
        'fechaPedido'
    ];

    public function empleados()
    {
        return $this->belongsToMany(Empleado::class, 'empleado_pedido_venta');
    }

    public function detalles()
    {
        return $this->hasMany(PedidoVentaDetalle::class);
    }

    public function facturas()
    {
        return $this->belongsToMany(FacturaVenta::class, 'factura_venta_pedido_venta');
    }

    public function sucursales()
    {
        return $this->belongsToMany(SucursalEmpresa::class, 'pedido_venta_sucursal_empresa');
    }
}
