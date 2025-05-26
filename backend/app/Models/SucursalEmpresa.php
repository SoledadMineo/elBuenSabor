<?php

namespace App\Models;

use App\Models\PedidoVenta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SucursalEmpresa extends Model
{
    use HasFactory;

    protected $table = 'sucursales_empresas';

    protected $fillable = [
        'nombre',
        'horarioApertura',
        'horacioCierre',
        'empresa_id',
        'domicilio_id'
    ];

    protected $casts = [
        'horarioApertura' => 'datetime:H:i',
        'horarioCierre' => 'datetime:H:i',
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function domicilio()
    {
        return $this->hasOne(Domicilio::class);
    }

    public function insumos()
    {
        return $this->hasMany(SucursalInsumo::class);
    }

    public function pedidosVenta()
    {
        return $this->hasMany(PedidoVenta::class);
    }
}
