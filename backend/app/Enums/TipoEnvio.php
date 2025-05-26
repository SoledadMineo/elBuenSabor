<?php

namespace App\Enums;

enum TipoEnvio: string
{
    case Delivery = 'delivery';
    case TakeAway = 'takeAway';
}
