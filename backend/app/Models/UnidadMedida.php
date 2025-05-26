<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadMedidas extends Model
{
    use HasFactory;

    protected $table = 'unidades_medidas';

    protected $fillable = [
        'denominacion',
    ];

    public function articuloInsumos()
    {
        return $this->hasMany(ArticuloInsumo::class);
    }

}
