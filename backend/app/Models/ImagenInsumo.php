<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagenInsumo extends Model
{
    use HasFactory;

    protected $table = 'imagenes_insumos';

    protected $fillable = [
        'denominacion',
        'articulo_insumo_id'
    ];

    public function articuloInsumo()
    {
        return $this->belongsTo(ArticuloInsumo::class);
    }
}
