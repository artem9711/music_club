<?php

namespace App\Services\Person;

use App\Enums\Genre;
use App\Services\Music\MusicManager;

class ElectroHousePerson extends Person
{
    function eletroHouseDance(): string
    {
        return MusicManager::genre(Genre::ELECTRO_HOUSE)->run();
    }

}