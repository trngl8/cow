<?php

namespace App;

abstract class Animal implements Loggable
{
    abstract public function voice():? string;

    public function log(string $message): void
    {
        echo $message . "\n";
    }
}