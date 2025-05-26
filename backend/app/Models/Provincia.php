<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $table = 'provincias';

    protected $fillable = [
        'nombre',
        'pais_id'
    ];

    public function localidad()
    {
        return $this->hasMany(Localidad::class);
    }

    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }
}
