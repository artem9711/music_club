<?php

namespace App\Services\Music;

use App\Enums\Dance\Body;
use App\Enums\Dance\Foot;
use App\Enums\Dance\Hand;
use App\Enums\Dance\Head;
use App\Enums\Dance\Torso;

class PopMusic extends Music
{
    function run(): string
    {
        return $this->builder
            ->torso(Torso::SMOOTHNESS)
            ->foot(Foot::SMOOTHNESS)
            ->hand(Hand::SMOOTHNESS)
            ->head(Head::SMOOTHNESS)
            ->letsDance();
    }
}