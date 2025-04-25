<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacturaVentaDetalle extends Model
{
    use HasFactory;

    protected $table = 'factura_venta_detalles';
    protected $fillable = [
        'cantidad', 
        'subtotal'
    ];

    public function facturaVenta()
    {
        return $this->belongsTo(FacturaVenta::class);
    }
}
