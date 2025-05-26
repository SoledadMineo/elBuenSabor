<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoVentaDetalle extends Model
{
    use HasFactory;

    protected $table = 'pedidos_ventas_detalles';

    protected $fillable = [
        'cantidad',
        'subtotal',
        'pedido_venta_id',
        'articulo_manufacturado_id',
        'articulo_insumo_id',
        'promocion_id'
    ];

    public function sucursalEmpresa()
    {
        return $this->belongsTo(SucursalEmpresa::class);
    }

    public function pedidoVenta(): BelongsTo
    {
        return $this->belongsTo(PedidoVenta::class);
    }

    public function promocion()
    {
        return $this->hasMany(Promocion::class);
    }

    public function articuloManufacturado()
    {
        return $this->hasMany(ArticuloManufacturado::class);
    }

    public function articuloInsumo()
    {
        return $this->hasMany(ArticuloInsumo::class);
    }

}
