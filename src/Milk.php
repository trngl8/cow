<?php

namespace App;

/**
 * Milk instance with weight (can be a pack of milk)
 */
class Milk extends Product
{
    private int $weight;

    private bool $isPack;

    public function __construct(int $weight)
    {
        $this->isPack = false;
        $this->weight = $weight;
    }

    public function transform(string $type) : Product
    {
        $this->unpack();
        return new $type((int)($this->weight / 2));
        //TODO: destroy milk object
    }

    public function pack()
    {
        $this->isPack = true;

        return $this;
    }

    public function unpack()
    {
        $this->isPack = false;

        return $this;
    }

    private function isPacked() : bool
    {
        return $this->isPack;
    }

    public function getWeight() : int
    {
        return $this->weight;
    }


}