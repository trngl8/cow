<?php

namespace App;

class Cow extends Animals implements CowInterface
{
    private Head $head;
    private Udder $udder;

    public function __construct(Head $head, Udder $udder)
    {
        $this->head = $head;
        $this->udder = $udder;
        $this->head->setVoice('Mooooo');

    }

    public function eat(): bool
    {
        return $this->head->getEat();
    }

    public function buildMilk(bool $buildMilk): void
    {
        $this->udder->buildMilk($buildMilk);
    }

    public function getMilk(): int
    {
        return $this->udder->getMilk();
    }

    public function voice(): ? string
    {
        if (!$this->eat() && !$this->getMilk()) {
            return $this->head->getVoice();
        }
        return null;
    }
}