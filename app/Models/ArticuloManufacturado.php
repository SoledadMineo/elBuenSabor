<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticuloManufacturado extends Model
{
    use HasFactory;

    protected $table = 'articulo_manufacturado';

    protected $fillable = [
        'denominacion',
        'descripcion',
        'precio_venta',
        'precio_costo',
        'tiempo_estimado',
        'categoria_articulo_manufacturado_id'
    ];

    public function imagenes()
    {
        return $this->hasMany(ImagenManufacturado::class);
    }

    public function categoria()
    {
        return $this->belongsTo(CategoriaArticuloManufacturado::class, 'categoria_articulo_manufacturado_id');
    }

    public function detalles()
    {
        return $this->hasMany(ArticuloManufacturadoDetalle::class);
    }
}
