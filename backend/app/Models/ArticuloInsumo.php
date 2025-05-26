<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticuloInsumo extends Model
{
    use HasFactory;

    protected $table = 'articulos_insumos';

    protected $fillable = [
        'denominacion',
        'precioCompra',
        'precioVenta',
        'esParaElaborar',
        'categoria_articulo_id',
        'sucursal_insumo_id',
        'unidad_medida_id'
    ];

    public function imagenInsumo()
    {
        return $this->hasOne(ImagenInsumo::class);
    }

    public function categoriaArticulo()
    {
        return $this->belongsTo(CategoriaArticulo::class);
    }

    public function sucursalInsumo()
    {
        return $this->belongsTo(SucursalInsumo::class);
    }

    public function pedidoVentaDetalle()
    {
        return $this->belongsTo(PedidoVentaDetalle::class);
    }

    public function articuloManufacturadoDetalle()
    {
        return $this->belongsTo(ArticuloManufacturadoDetalle::class);
    }

    public function promocionDetalle()
    {
        return $this->hasMany(PromocionDetalle::class);
    }

    public function unidadMedida()
    {
        return $this->belongsTo(UnidadMedida::class);
    }

}
