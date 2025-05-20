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
        'fechaPedido',
        'cliente_id',
        'empleado_id',
        'domicilio_entrega_id'
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
        return $this->hasMany(FacturaVenta::class);
    }

    public function sucursales()
    {
        return $this->belongsTo(SucursalEmpresa::class);
    }

    public function pedidodVentaDetalle()
    {
        return $this->hasMany(PedidoVentaDetalle::class);
    }
    
    public function datosMercadoPago()
    {
        return $this->hasOne(DatosMercadoPago::class);
    }

}
