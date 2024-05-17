<?php

declare(strict_types=1);

namespace App\Enums;

enum Genre: string
{

    case RNB = 'rnb';
    case ELECTRO_HOUSE = 'electro_house';
    case POP = 'pop';

    case HIP_HOP = 'hip_hop';
    public function name()
    {
        switch ($this) {
            case self::RNB:
                return 'R&B';
            case self::ELECTRO_HOUSE:
                return 'Electro House';
            case self::POP:
                return 'Pop';
            case self::HIP_HOP:
                return 'Hip Hop';
        }
    }
}
