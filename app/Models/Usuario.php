<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';
    protected $fillable = ['auth0Id', 'username'];

    public function cliente()
    {
        return $this->hasOne(Cliente::class);
    }

    public function empleado()
    {
        return $this->hasOne(Empleado::class);
    }
}
