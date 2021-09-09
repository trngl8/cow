<?php

namespace App;

class Udder
{
    private int $milk;

    public function buildMilk(bool $buildMilk): void
    {
        $this->milk = $buildMilk ? random_int(5, 10) : 0;
    }

    public function getMilk() : int
    {
        return $this->milk;
    }
}