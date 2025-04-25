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

    public function insumos()
    {
        return $this->hasMany(SucursalInsumo::class);
    }
}
