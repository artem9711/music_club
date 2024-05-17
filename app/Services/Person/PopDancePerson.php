<?php

namespace App\Services\Person;

use App\Enums\Genre;
use App\Services\Music\MusicManager;

class PopDancePerson extends Person
{
    function popDance(): string
    {
        return MusicManager::genre(Genre::POP)->run();
    }

}