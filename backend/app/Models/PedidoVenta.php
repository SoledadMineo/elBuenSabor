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

    protected $casts = [
        'estado' => Estado::class,
        'tipoEnvio' => TipoEnvio::class,
        'formaPago' => FormaPago::class,
    ];

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }

    public function empleado(): BelongsTo
    {
        return $this->belongsTo(Empleado::class);
    }

    public function sucursalEmpresa(): BelongsTo
    {
        return $this->belongsTo(SucursalEmpresa::class);
    }

    public function pedidoVentaDetalles()
    {
        return $this->hasMany(PedidoVentaDetalle::class);
    }

    public function facturaVenta(): HasOne
    {
        return $this->hasOne(FacturaVenta::class);
    }

}
