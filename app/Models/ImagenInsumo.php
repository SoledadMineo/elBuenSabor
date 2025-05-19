<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagenInsumo extends Model
{
    use HasFactory;
    protected $table = 'imagen_insumos';
    protected $fillable = ['denominacion'];


    public function articuloInsumeo()
    {
        return $this->belongsTo(ArticuloInsumo::class);
    }
}
