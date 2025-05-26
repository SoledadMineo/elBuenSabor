<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacturaVenta extends Model
{
    use HasFactory;
 
    protected $table = 'facturas_ventas';

    protected $fillable = [
        'fechaFacturacion',
        'numeroComprobante',
        'formaPago',
        'subTotal',
        'descuento',
        'gastosEnvio',
        'totalVenta',
        'pedido_venta_id',
        'empleado_id'
    ];

    protected $casts = [
        'formaPago' => FormaPago::class,
    ];

    public function pedidoVenta(): BelongsTo
    {
        return $this->belongsTo(PedidoVenta::class);
    }

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }

    public function facturaVentaDetalles(): HasMany
    {
        return $this->hasMany(FacturaVentaDetalle::class);
    }

    public function datosMercadoPago()
    {
        return $this->hasOne(DatosMercadoPago::class);
    }

}

