<?php

namespace App\Enums;

enum AttributeTypeEnum: string
{
    case TEXT = 'text';
    case DATE = 'date';
    case SELECT = 'select';
    case NUMBER = 'number';
    case TIME = 'time';

    public static function values(): array
    {
        return array_map(fn($case) => $case->value, self::cases());
    }
}
