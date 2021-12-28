<?php

namespace App;

class Sheep extends Animal
{
    public function voice() : string
    {
        return "Beeee";
    }

    public function produceWool() : int
    {
        return rand(5,10);
    }
}