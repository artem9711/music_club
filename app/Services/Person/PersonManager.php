<?php

namespace App\Services\Person;

use App\DTO\Persona as PersonaDto;

class PersonManager
{
    public static function data(PersonaDto $persona): Person
    {
        return self::factory($persona->name)
            ->withEnum($persona->genre)
            ->make();
    }

    public static function factory(string $name): PersonFactory
    {
        return new PersonFactory($name);
    }
}