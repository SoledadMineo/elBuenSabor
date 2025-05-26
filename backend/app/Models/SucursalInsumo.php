<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SucursalInsumo extends Model
{
    use HasFactory;

    protected $table = 'sucursales_insumos';

    protected $fillable = [
        'stockActual',
        'stockMinimo',
        'stockMaximo',
        'sucursal_empresa_id',
        'articulo_insumo_id',
    ];

    public function sucursalEmpresa()
    {
        return $this->belongsTo(SucursalEmpresa::class);
    }

    public function articuloInsumo()
    {
        return $this->hasMany(ArticuloInsumo::class);
    }
}
