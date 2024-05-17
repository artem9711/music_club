<?php

namespace App\Services\Dance;

use App\Enums\Dance\Body;
use App\Enums\Dance\Torso;

class TorsoDance
{
    public function __construct(private Torso $torso){}

    public function print(): string
    {
        return $this->torso->getTitle();
    }
}