<?php

namespace App;

interface Loggable
{
    public function log(string $message): void;
}