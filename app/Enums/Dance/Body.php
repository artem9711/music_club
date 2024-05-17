<?php

declare(strict_types=1);

namespace App\Enums\Dance;

enum Body: string
{
    case UP_BACK = 'up_back';

    public function getTitle(): string
    {
        return match($this) {
            Body::UP_BACK => 'движение телом вперед-назад',
        };
    }
}
