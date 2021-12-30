<?php

namespace App;

class Dog implements Serviceable
{
    static int $cost = 1;

    public function getCost(): int
    {
        return self::$cost;
    }
}