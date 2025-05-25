<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SucursalInsumo extends Model
{
    use HasFactory;

    protected $table = 'sucursal_insumos';

    protected $fillable = [
        'stockActual',
        'stockMinimo',
        'stockMaximo',
        'sucursal_empresa_id',
        'articulo_insumo_id',
    ];

    public function sucursal()
    {
        return $this->belongsTo(SucursalEmpresa::class, 'sucursal_empresa_id');
    }

    public function articuloInsumo()
    {
        return $this->belongsTo(ArticuloInsumo::class, 'articulo_insumo_id');
    }
}
