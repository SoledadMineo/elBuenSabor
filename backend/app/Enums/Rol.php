<?php

namespace App\Enums;

enum Rol: string
{
    case Admin = 'admin';
    case Empleado = 'empleado';
    case Cliente = 'cliente';
}
