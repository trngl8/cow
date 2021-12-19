<?php

namespace App;

class Cow extends Animal implements CowInterface
{
    private bool $hungry;
    private Head $head;
    private Udder $udder;

    public function __construct()
    {
        $this->head = new Head();
        $this->udder = new Udder('full');

        $this->hungry = true;
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

    //TODO: maybe action-style name (makeVoice, makeSound)
    public function voice(): ?string
    {
        if(!$this->hungry && 'full' != $this->udder->getStatus()) {
            return null;
        }

        return $this->head->voice;
    }
}