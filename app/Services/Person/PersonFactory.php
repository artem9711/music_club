<?php

namespace App\Services\Person;

use App\Enums\Genre;

class PersonFactory
{
    private Genre $music;

    public function __construct(private string $name)
    {
    }

    public function withEnum(Genre $music): self
    {
        $this->music = $music;

        return $this;
    }

    public function make(): Person
    {
        return match ($this->music) {
            Genre::RNB => new RnBPerson($this->name),
            Genre::ELECTRO_HOUSE => new ElectroHousePerson($this->name),
            Genre::POP => new PopDancePerson($this->name),

        };
    }
}