<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'email',
        'usuario_id'
    ];

    public function usuario()
    {
        return $this->hasOne(Usuario::class);
    }

    public function domicilio()
    {
        return $this->hasOne(Domicilio::class);
    }
}
