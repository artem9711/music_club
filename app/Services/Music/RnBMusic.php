<?php

namespace App\Services\Music;

use App\Enums\Dance\Body;
use App\Enums\Dance\Foot;
use App\Enums\Dance\Hand;
use App\Enums\Dance\Head;

class RnBMusic extends Music
{
    function run(): string
    {
        return $this->builder
            ->body(Body::UP_BACK)
            ->foot(Foot::DOWN)
            ->hand(Hand::BEND)
            ->head(Head::UP_BACK)
            ->letsDance();
    }
}