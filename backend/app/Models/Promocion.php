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
        'fechaDesde',
        'fechaHasta',
        'descuento',
        
    ];

    public function promocionDetalle()
    {
        return $this->hasMany(PromocionDetalle::class);
    }

    public function pedidoVentaDetalle()
    {
        return $this->belongsTo(PedidoVentaDetalle::class);
    }
}
