<?php

namespace App\Services\Music;

use App\Enums\Genre;

class MusicManager
{
    public static function genre(Genre $genre): Music
    {
        return self::factory()
            ->withEnum($genre)
            ->make();
    }

    public static function factory(): MusicFactory
    {
        return new MusicFactory();
    }
}