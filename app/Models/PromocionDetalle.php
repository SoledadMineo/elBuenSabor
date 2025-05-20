<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromocionDetalle extends Model
{
    use HasFactory;

    protected $table = 'promocion_detalles';
    protected $fillable = [
        'cantidad', 
        'promocion_id'
    ];

    public function promocion()
    {
        return $this->belongsTo(Promocion::class);
    }
    
    public function articulo()
    {
        return $this->belongsTo(ArticuloManufacturado::class);
    }
}
