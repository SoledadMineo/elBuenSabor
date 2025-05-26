<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Rol;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados';

    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'email',
        'perfil',
        'usuario_id'
    ];

    protected $casts = [
        'perfil' => Rol::class,
    ];

    public function pedidos()
    {
        return $this->hasMany(PedidoVenta::class);
    }

    public function facturas()
    {
        return $this->hasMany(FacturaVenta::class);
    }

    public function usuario()
    {
        return $this->hasOne(Cliente::class);
    }
}
