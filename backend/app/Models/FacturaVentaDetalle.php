<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacturaVentaDetalle extends Model
{
    use HasFactory;

    protected $table = 'facturas_ventas_detalles';

    protected $fillable = [
        'cantidad',
        'subtotal',
        'factura_venta_id',
        'articulo_manufacturado_id',
    ];

    public function facturaVenta(): BelongsTo
    {
        return $this->belongsTo(FacturaVenta::class);
    }

    public function articuloManufacturado(): BelongsTo
    {
        return $this->belongsTo(ArticuloManufacturado::class);
    }
}
