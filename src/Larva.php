<?php

namespace App;

class Larva
{
    private bool $enabled;

    public function __construct()
    {
        $this->enabled = true;
    }

    public function transform() : Bee
    {
        if(!$this->enabled) {
           throw new \RuntimeException("Larva is disabled");
        }

        $this->enabled = false;
        return new Bee();
    }
}