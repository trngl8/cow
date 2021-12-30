<?php

namespace App;

class Wool extends Product
{
    public function __construct(int $value)
    {
        $this->value = $value;
    }
}