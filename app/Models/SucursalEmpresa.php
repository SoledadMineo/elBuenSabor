<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SucursalEmpresa extends Model
{
    protected $fillable = [
        'nombre', 
        'horarioApertura', 
        'horarioCierre',
        'empresa_id'
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function articulosInsumo()
    {
        return $this->belongsToMany(ArticuloInsumo::class, 'sucursal_insumo')
                    ->withPivot('stockActual', 'stockMinimo', 'stockMaximo')
                    ->withTimestamps();
    }

    
    public function pedidoVenta()
    {
        return $this->hasMany(PedidoVenta::class);
    }

    public function domicilio()
    {
        return $this->hasOne(Domicilio::class);
    }

}
