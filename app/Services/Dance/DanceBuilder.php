<?php

namespace App\Services\Dance;

use App\Enums\Dance\Body;
use App\Enums\Dance\Foot;
use App\Enums\Dance\Hand;
use App\Enums\Dance\Head;
use App\Enums\Dance\Torso;

class DanceBuilder
{
    private array $dance = [];

    public function hand(Hand $hand): self
    {
        $this->dance[] = (new HandDance($hand))->print();

        return $this;
    }

    public function foot(Foot $foot): self
    {
        $this->dance[] = (new FootDance($foot))->print();

        return $this;
    }

    public function body(Body $body): self
    {
        $this->dance[] = (new BodyDance($body))->print();

        return $this;
    }

    public function torso(Torso $torso): self
    {
        $this->dance[] = (new TorsoDance($torso))->print();

        return $this;
    }

    public function head(Head $head): self
    {
        $this->dance[] = (new HeadDance($head))->print();

        return $this;
    }

    public function letsDance(): string
    {
        return implode(',', $this->dance);
    }
}