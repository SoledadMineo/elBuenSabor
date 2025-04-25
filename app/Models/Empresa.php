<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'nombre', 
        'razon_social', 
        'cuil'
    ];

    public function sucursales()
    {
        return $this->hasMany(SucursalEmpresa::class);
    }
}
