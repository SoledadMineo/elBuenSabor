<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoVentaDetalle extends Model
{
    use HasFactory;

    public function promocion()
    {
        return $this->belongsTo(Promocion::class);
    }
}
