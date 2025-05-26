<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaArticulo extends Model
{
    use HasFactory;

    protected $table = 'categorias_articulos';

    protected $fillable = [
        'denominacion',
        'precioCompra',
        'precioVenta',
        'esParaElaborar',
        'categoria_articulo_id'
    ];

    public function articuloInsumo()
    {
        return $this->hasMany(ArticuloInsumo::class);
    }

    public function categoriaArticulo()
    {
        return $this->hasOne(CategoriaArticulo::class);
    }
}
