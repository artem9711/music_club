<?php

declare(strict_types=1);

namespace App\Enums\Dance;

enum Torso: string
{
    case UP_BACK = 'up_back';
    case SMOOTHNESS = 'smoothness';


    public function getTitle(): string
    {
        return match($this) {
            Torso::UP_BACK => 'туловищем вперед назад',
            Torso::SMOOTHNESS => 'плавные движения туловищем',
        };
    }
}
