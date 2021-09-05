<?php

namespace App;

class MilkTank
{
    const MAX_CAPACITY = 640;

    private int $milkCount;

    public function __construct()
    {
        $this->milkCount = 0;
    }

    public function getLevel() : int
    {
        return $this->milkCount;
    }

    public function add(int $m)
    {
        $this->milkCount += $m;

        if($this->milkCount > self::MAX_CAPACITY) {
            throw new \Exception(sprintf('Miltank is full/ Max capacity of this model is %d. You try to add %d. It is more than max capacity', self::MAX_CAPACITY, $m));
        }
    }
}