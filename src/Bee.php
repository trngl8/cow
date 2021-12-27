<?php

namespace App;

class Bee extends Animal
{
    private string $type;

    public function voice(): ?string
    {
       return 'Bzzzz';
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function getType() : string
    {
        return $this->type;
    }
}