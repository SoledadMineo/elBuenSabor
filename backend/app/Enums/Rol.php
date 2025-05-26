<?php

namespace App\Enums;

enum RolEnum: string
{
    case Admin = 'admin';
    case Empleado = 'empleado';
    case Cliente = 'cliente';
}
