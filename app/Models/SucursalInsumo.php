<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SucursalInsumo extends Model
{
    protected $table = 'sucursal_insumo';

    protected $fillable = [
        'sucursal_empresa_id',
        'articulo_insumo_id',
        'stock_actual',
        'stock_minimo',
        'stock_maximo'
    ];

    public function sucursalEmpresa()
    {
        return $this->belongsTo(SucursalEmpresa::class);
    }

    public function articuloInsumo()
    {
        return $this->belongsTo(ArticuloInsumo::class);
    }
}
