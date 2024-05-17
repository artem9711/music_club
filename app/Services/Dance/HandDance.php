<?php

namespace App\Services\Dance;

use App\Enums\Dance\Hand;

class HandDance
{
    public function __construct(private Hand $hand) {}

    public function print(): string
    {
        return $this->hand->getTitle();
    }
}