<?php

namespace App\DTO;

use App\Enums\Genre;

class Persona
{
    public function __construct(
        public string $name,
        public Genre $genre,
    ) {
    }
}