<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoVentaDetalle extends Model
{
    use HasFactory;

    protected $table = 'pedido_venta_detalles';
    protected $fillable = [
        'cantidad', 
        'subtotal', 
        'promocion_id'];

    public function promocion()
    {
        return $this->belongsTo(Promocion::class);
    }

    public function pedidoVenta()
    {
        return $this->belongsTo(PedidoVenta::class);
    }
 
    public function articulo()
    {
        return $this->belongsTo(ArticuloManufacturado::class);
    }

    public function detalles()
    {
        return $this->hasMany(FacturaVentaDetalle::class);
    }

}
