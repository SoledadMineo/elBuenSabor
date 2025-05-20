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
        'categoria_articulo_id',
        'unidad_medida_id'
    ];

    public function categoriaArticulo()
    {
        return $this->belongsTo(CategoriaArticulo::class);
    }

    public function unidadMedida()
    {
        return $this->belongsTo(UnidadMedida::class);
    }
    
    public function imagenInsumo()
    {
        return $this->hasOne(ImagenInsumo::class);
    }

    public function sucursales()
    {
        return $this->belongsToMany(SucursalEmpresa::class, 'sucursal_insumo')
                    ->withPivot('stockActual', 'stockMinimo', 'stockMaximo')
                    ->withTimestamps();
    }

    public function detalles()
    {
        return $this->hasMany(ArticuloManufacturadoDetalle::class);
    }


}
