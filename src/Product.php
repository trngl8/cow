<?php

namespace App;

abstract class Product
{
    protected $value;

    public function getValue()
    {
        return $this->value;
    }
}