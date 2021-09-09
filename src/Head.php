<?php

namespace App;

class Head
{
    private bool $eat;
    private ?string $voice = null;

    public function getEat(): bool
    {
        return (bool)$this->eat;
    }

    public function setEat(bool $eat): self
    {
        $this->eat = $eat;

        return $this;
    }

    public function getVoice():? string
    {
        return $this->voice;
    }

    public function setVoice($voice): self
    {
        $this->voice = $voice;

        return $this;
    }
}