<?php

namespace App\Enums;

enum Estado: string
{
    case Preparacion = 'preparacion';
    case Pendiente = 'pendiente';
    case Cancelado = 'cancelado';
    case Rechazado = 'rechazado';
    case Entregado = 'entregado';
}
