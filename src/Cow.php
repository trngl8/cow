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
    }

    public function eat()
    {
        $this->head->eat();
    }

    public function buildMilk()
    {
        $this->udder->buildMilk();
    }
}