<?php

namespace App;

class Herd
{
    private array $cows;

    private int $sequenceStep;

    private int $position;

    public function __construct($limit, int $step = 1)
    {
        $this->sequenceStep = $step;
        $this->position = 0;

        for ($i = 0; $i < $limit; $i += $this->sequenceStep) {
            $cow = new Cow();
            $cow->log(sprintf("%s instance created", Cow::class));

            $this->cows[$i] = $cow;
        }
    }

    public function add(Cow $animal) : Herd
    {
        $this->cows[] = $animal;

        return $this;
    }

    public function move($position = 1) : Herd
    {
        $this->position += $position;

        return $this;
    }

    public function getPosition() : int
    {
        return $this->position;
    }

    public function getCows() : array
    {
        return $this->cows;
    }
}