<?php

namespace App\Enums;

enum AdminLevel: int
{
    case SUPER_ADMIN = 1;

    case ADMIN = 2;
    case EDITOR = 3;
}
