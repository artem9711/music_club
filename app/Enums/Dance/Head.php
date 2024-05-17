<?php

declare(strict_types=1);

namespace App\Enums\Dance;

enum Head: string
{
    case UP_BACK = 'up_back';
    case SMOOTHNESS = 'smoothness';


    public function getTitle(): string
    {
        return match($this) {
            Head::UP_BACK => 'головой вперед-назад',
            Head::SMOOTHNESS => 'плавные движения головой',
        };
    }
}
