<?php

declare(strict_types=1);

namespace App\Enums\Dance;

enum Foot: string
{
    case BOTH = 'both';
    case DOWN = 'down';
    case RHYTHM = 'rhythm';
    case SMOOTHNESS = 'smoothness';


    public function getTitle(): string
    {
        return match($this) {
            Foot::BOTH => 'движение обоими ногами',
            Foot::DOWN => 'ноги в полуприсяде',
            Foot::RHYTHM => 'ноги двигаются в ритме',
            Foot::SMOOTHNESS => 'Плавные движения ногами',
        };
    }
}
