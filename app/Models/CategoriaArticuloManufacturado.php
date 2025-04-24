<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaArticuloManufacturado extends Model
{
    use HasFactory;

    public function articulosManufacturados()
    {
        return $this->hasMany(ArticuloManufacturado::class);
    }
}
