<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaArticuloManufacturado extends Model
{
    use HasFactory;

    protected $table = 'categorias_articulos_manufacturados';

    protected $fillable = [
        'denominacion',
        'articulo_manufacturado_id'
        
    ];

    public function articuloManufacturado()
    {
        return $this->belongsTo(ArticuloManufacturado::class);
    }
}
