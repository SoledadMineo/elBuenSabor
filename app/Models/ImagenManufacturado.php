<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagenManufacturado extends Model
{
    use HasFactory;

    public function imagenes()
    {
        return $this->hasMany(ImagenManufacturado::class);
    }
}
