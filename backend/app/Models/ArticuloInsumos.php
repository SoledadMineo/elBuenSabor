<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticuloInsumo extends Model
{
    use HasFactory;

    protected $table = 'articulo_insumos';

    protected $fillable = [
        'denominacion',
        'precioCompra',
        'precioVenta',
        'esParaElaborar',
    ];

    protected $casts = [
        'esParaElaborar' => 'boolean',
    ];

    public function sucursales()
    {
        return $this->hasMany(SucursalInsumo::class, 'articulo_insumo_id');
    }
}
