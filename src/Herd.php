<?php

namespace App;

class Herd
{
    private string $type;

    private array $animals;

    private int $sequenceStep;

    private int $position;

    public function __construct(string $type, $limit, int $step = 1)
    {
        $this->type = $type;
        $this->sequenceStep = $step;
        $this->position = 0;

        for ($i = 0; $i < $limit; $i += $this->sequenceStep) {
            //TODO: try and raise an exception on fail
            $animal = new $this->type();
            $animal->log(sprintf("%s instance created", Animal::class));

            $this->animals[$i] = $animal;
        }
    }

    public function add(Animal $animal) : Herd
    {
        $this->animals[] = $animal;

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
        return $this->animals;
    }
}