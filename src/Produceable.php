<?php

namespace App;

interface Produceable
{
    public function produce() : Product;
}