<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticuloManufacturado extends Model
{
    use HasFactory;

    public function imagenes()
    {
        return $this->hasMany(ImagenManufacturado::class);
    }

    public function categoria()
    {
        return $this->belongsTo(CategoriaArticuloManufacturado::class, 'categoria_articulo_manufacturado_id');
    }
}
