<?php

namespace App\Services\Dance;

use App\Enums\Dance\Body;

class BodyDance
{
    public function __construct(private Body $body){}

    public function print(): string
    {
        return $this->body->getTitle();
    }
}