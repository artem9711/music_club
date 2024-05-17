<?php

namespace App\Services\Music;

use App\Enums\Genre;

class MusicFactory
{
    private Genre $music;

    public function withEnum(Genre $music): self
    {
        $this->music = $music;

        return $this;
    }

    public function make(): Music
    {
        return match ($this->music) {
            Genre::RNB => new RnBMusic(),
            Genre::ELECTRO_HOUSE => new ElectroHouseMusic(),
            Genre::POP => new PopMusic(),
        };
    }
}