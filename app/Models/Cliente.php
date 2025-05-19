<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';
    protected $fillable = [
        'nombre', 
        'apellido', 
        'telefono', 
        'email', 
        'domicilio_id',
        'usuario_id'];

    public function domicilio()
    {
        return $this->hasOne(Domicilio::class);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
