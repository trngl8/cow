<?php

namespace App;

class Dog implements Serviceable
{
    static int $cost = 1;

    private int $position;

    private $attach;

    public function getCost(): int
    {
        return self::$cost;
    }

    public function patrol(Herd $herd) : Dog
    {
        $this->attach = $herd;
        $this->position = $herd->getPosition();

        return $this;
    }

    public function move($position = 1) : Dog
    {
        $this->position += $position;
        return $this;
        //TODO: check attached herd position
    }

    public function getAttach()
    {
        return $this->attach;
    }
}