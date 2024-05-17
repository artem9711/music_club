<?php

namespace App\Services\Person;

use App\Enums\Genre;
use App\Services\Music\MusicManager;

class RnBPerson extends Person
{
    function rnbDance(): string
    {
        return MusicManager::genre(Genre::RNB)->run();
    }

    function hipHopDance(): string
    {
        return MusicManager::genre(Genre::HIP_HOP)->run();
    }
}