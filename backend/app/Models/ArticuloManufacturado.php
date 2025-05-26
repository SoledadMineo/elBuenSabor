<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articuloManufacturado extends Model
{
    use HasFactory;

    protected $table = 'articulos_manufacturados';

    protected $fillable = [
        'denominacion',
        'descripcion',
        'precioVenta',
        'precioCosto',
        'tiempoEstimado'
        
    ];
    
    public function categoriaArticuloManufacturado()
    {
        return $this->hasOne(CategoriaArticuloManufacturado::class);
    }

    public function imagenManufacturado()
    {
        return $this->hasMany(ImagenManufacturado::class);
    }

    public function pedidoVentaDetalles()
    {
        return $this->belongsTo(PedidoVentaDetalle::class);
    }

    public function articuloManufacturadoDetalle()
    {
        return $this->hasMany(ArticuloManufacturadoDetalle::class);
    }

    public function facturaVentaDetalle()
    {
        return $this->hasMany(FacturaVentaDetalle::class);
    }

    public function promocionDetalle()
    {
        return $this->belongsTo(PromocionDetalle::class);
    }

}