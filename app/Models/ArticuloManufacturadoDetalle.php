<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticuloManufacturadoDetalle extends Model
{
    use HasFactory;

    protected $table = 'articulo_manufacturado_detalles';

    protected $fillable = [
        'cantidad',
        'articulo_manufacturado_id',
        'articulo_insumo_id',
    ];

    public function articuloManufacturado()
    {
        return $this->belongsTo(ArticuloManufacturado::class);
    }

    public function articuloInsumo()
    {
        return $this->belongsTo(ArticuloInsumo::class);
    }
}
