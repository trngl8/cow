<?php

namespace App;

class Head
{
    private bool $eat;
    public string $voice;

    public function __construct()
    {
        $this->voice = 'muuuuuuu';
    }

    public function getEat(): bool
    {
        return (bool)$this->eat;
    }

    public function setEat(bool $eat): self
    {
        $this->eat = $eat;

        return $this;
    }
}