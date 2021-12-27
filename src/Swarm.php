<?php

namespace App;

class Swarm extends Herd
{
    private bool $fly; //is swarm in fly

    public function raise()
    {
        $this->fly = true;
    }

    public function isFly(): bool
    {
        return $this->fly;
    }

    public function home()
    {
        $this->fly = false;
        $this->move(0); //home

        return $this;
    }
}