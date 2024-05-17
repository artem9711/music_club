<?php

namespace App\Services\Music;

use App\Enums\Dance\Foot;
use App\Enums\Dance\Hand;
use App\Enums\Dance\Torso;

class ElectroHouseMusic extends Music
{
    function run(): string
    {
        return $this->builder
            ->torso(Torso::UP_BACK)
            ->hand(Hand::CIRCLE)
            ->foot(Foot::RHYTHM)
            ->letsDance();
    }
}