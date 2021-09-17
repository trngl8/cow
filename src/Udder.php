<?php

namespace App;

class Udder
{
    private string $status;

    private int $milk;

    public function __construct(string $status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function buildMilk(bool $buildMilk): void
    {
        $this->milk = $buildMilk ? random_int(5, 10) : 0;
    }

    public function getMilk() : int
    {
        return $this->milk;
    }
}