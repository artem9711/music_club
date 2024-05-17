<?php

namespace App\Services\Person;

use App\Enums\Genre;
use App\Exceptions\PersonaNotDanceThisType;

abstract class Person
{
    public function __construct(
        private string $name,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }


    public function rnbDance(): string
    {
        throw new PersonaNotDanceThisType();
    }

    public function hipHopDance(): string
    {
        throw new PersonaNotDanceThisType();
    }


    public function eletroHouseDance(): string
    {
        throw new PersonaNotDanceThisType();
    }

    public function popDance(): string
    {
        throw new PersonaNotDanceThisType();
    }

    public function dance(Genre $genre): string
    {
        return match($genre){
            Genre::RNB => $this->rnbDance(),
            Genre::ELECTRO_HOUSE => $this->eletroHouseDance(),
            Genre::POP => $this->popDance(),
            Genre::HIP_HOP => $this->hipHopDance(),
        };
    }
}