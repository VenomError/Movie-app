<?php

namespace App\Enum;

enum UserRole: string
{
    case COSTUMER = 'costumer';
    case ADMIN = 'admin';

    public static function values(): array
    {
        return array_map(fn(self $case) => $case->value, self::cases());
    }
}
