<?php

namespace App;

class Herd
{
    private string $type;

    private array $cows;

    private int $sequenceStep;

    private int $position;

    public function __construct(string $type, $limit, int $step = 1)
    {
        $this->type = $type;
        $this->sequenceStep = $step;
        $this->position = 0;

        for ($i = 0; $i < $limit; $i += $this->sequenceStep) {
            //TODO: try and raise an exception on fail
            $cow = new $type();
            $cow->log(sprintf("%s instance created", Animal::class));

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

    public function getAnimals() : array
    {
        return $this->cows;
    }
}