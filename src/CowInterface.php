<?php

namespace App;

interface CowInterface
{
    public function eat(): bool;
    public function buildMilk(bool $buildMilk);
    public function voice():? string;
}