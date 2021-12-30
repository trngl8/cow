<?php

namespace App;

class Sheep extends Animal implements Produceble
{
    public function voice() : string
    {
        return "Beeee";
    }

    public function produce(): Product
    {
        return new Wool(rand(5,10));
    }
}