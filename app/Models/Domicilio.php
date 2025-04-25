<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    use HasFactory;

    protected $table = 'domicilio';
    protected $fillable = ['calle', 'numero', 'cp', 'localidad_id'];

    public function localidad()
    {
        return $this->belongsTo(Localidad::class);
    }
}
