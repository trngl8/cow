<?php

namespace App;

class Logger implements Loggable
{
    public function log(string $message): void
    {
        echo $message . "\n";
    }
}