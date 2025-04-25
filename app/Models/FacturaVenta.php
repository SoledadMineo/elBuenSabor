<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacturaVenta extends Model
{
    use HasFactory;

    public function detalles()
    {
        return $this->hasMany(FacturaVentaDetalle::class);
    }

    public function datosMercadoPago()
    {
        return $this->hasOne(DatosMercadoPago::class, 'factura_venta_id');
    }
}
