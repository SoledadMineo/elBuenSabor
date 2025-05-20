<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaArticulo extends Model
{
    use HasFactory;

    protected $table = 'categoria_articulos';
    protected $fillable = [
        'denominacion'];

    public function articulosInsumo()
    {
        return $this->hasMany(ArticuloInsumo::class);
    }

    // Subcategorías (hijos)
    public function subcategorias()
    {
        return $this->hasMany(CategoriaArticulo::class, 'categoria_padre_id');
    }

    // Categoría padre
    public function categoriaPadre()
    {
        return $this->belongsTo(CategoriaArticulo::class, 'categoria_padre_id');
    }
}
