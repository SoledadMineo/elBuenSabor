<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticuloManufacturadoDetalle extends Model
{
    use HasFactory;

    protected $table = 'articulos_manufacturados_detalles';

    protected $fillable = [
        'cantidad',
        'articulo_manufacturado_id',
    ];

    public function articuloManufacturado()
    {
        return $this->belongsTo(ArticuloManufacturado::class);
    }

    public function articuloInsumo()
    {
        return $this->hasMany(ArticuloInsumo::class);
    }
}