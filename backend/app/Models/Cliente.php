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
        'email'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function domicilio()
    {
        return $this->hasOne(Domicilio::class);
    }
}
