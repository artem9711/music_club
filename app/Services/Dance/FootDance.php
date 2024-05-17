<?php

namespace App\Services\Dance;

use App\Enums\Dance\Foot;

class FootDance
{
    public function __construct(private Foot $foot) {}

    public function print(): string
    {
        return $this->foot->getTitle();
    }
}