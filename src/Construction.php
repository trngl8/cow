<?php

namespace App;

abstract class Construction
{
    static int $cost = 10;

    public function getCost(): int
    {
        return self::$cost;
    }
}