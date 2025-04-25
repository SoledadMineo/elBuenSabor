<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;

    protected $table = 'promociones';

    protected $fillable = [
        'denominacion',
        'fecha_desde',
        'fecha_hasta',
        'descuento',
    ];

    // Relación con PromocionDetalle
    public function detalles()
    {
        return $this->hasMany(PromocionDetalle::class);
    }

    // Relación con PedidoVentaDetalle
    public function detallesPedidoVenta()
    {
        return $this->hasMany(PedidoVentaDetalle::class);
    }
}
