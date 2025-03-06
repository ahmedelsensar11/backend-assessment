<?php

namespace App\Enums;

enum StatusEnum: string
{
    case PENDING = 'pending';
    case ACTIVE = 'active';
    case ENDED = 'ended';

    public function label(): string
    {
        return match($this) {
            self::PENDING => __('Pending'),
            self::ACTIVE => __('Active'),
            self::ENDED => __('Ended'),
        };
    }

    public static function values(): array
    {
        return array_map(fn($case) => $case->value, self::cases());
    }
}
