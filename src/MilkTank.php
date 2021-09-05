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
            throw new \Exception(sprintf('Tank is full. Max capacity for this model is %d. You added %d, now capacity is %d', self::MAX_CAPACITY, $m, $this->milkCount));
        }
    }
}