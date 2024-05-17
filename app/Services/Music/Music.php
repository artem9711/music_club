<?php

namespace App\Services\Music;

use App\Enums\Genre;
use App\Services\Dance\DanceBuilder;

abstract class Music
{
    protected DanceBuilder $builder;

    public function __construct()
    {
        $this->builder = new DanceBuilder();
    }

    abstract function run(): string;
}