<?php

namespace App;

class Udder
{
    private int $milk;

    public function buildMilk()
    {
        $this->milk = rand(5, 10);
    }

    public function getMilk() : int
    {
        return $this->milk;
    }
}