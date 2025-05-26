<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromocionDetalle extends Model
{
    use HasFactory;

    protected $table = 'promociones_detalles';

    protected $fillable = [
        'cantidad',
        'promocion_id',
        'articulo_manufacturado_id',
        'articulo_insumo_id',
    ];

    public function promocion()
    {
        return $this->belongsTo(Promocion::class);
    }

    public function articuloManufacturado()
    {
        return $this->hasOne(ArticuloManufacturado::class);
    }

    public function articuloInsumo()
    {
        return $this->belongsTo(ArticuloInsumo::class);
    }
}
