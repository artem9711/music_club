<?php

namespace App\Services\Dance;

use App\Enums\Dance\Body;
use App\Enums\Dance\Head;

class HeadDance
{
    public function __construct(private Head $head){}

    public function print(): string
    {
        return $this->head->getTitle();
    }
}