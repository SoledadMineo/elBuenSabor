<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagenManufacturado extends Model
{
    use HasFactory;

    protected $table = 'imagenes_manufacturados';

    protected $fillable = [
        'denominacion',
        'articulo_manufacturado_id'
        
    ];

    public function articuloManufacturado()
    {
        return $this->belongsTo(ArticuloManufacturado::class);
    }

}
