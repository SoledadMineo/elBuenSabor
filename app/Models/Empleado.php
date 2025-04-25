<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleado';

    protected $fillable = [
        'nombre', 
        'apellido', 
        'telefono', 
        'email', 
        'Rol', 
        'usuario_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function pedidosVenta()
    {
        return $this->belongsToMany(PedidoVenta::class, 'empleado_pedido_venta');
    }
}
