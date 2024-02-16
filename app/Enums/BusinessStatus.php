<?php

namespace App\Enums;

enum BusinessStatus: int
{
    case PENDING = 0;
    case ACTIVE = 1;
    case DE_ACTIVE = 2;
}
