<?php

namespace App;

abstract class Construction
{
    private int $positionX;
    private int $positionY;
    private int $square;

    private $cost;

    public function __construct(int $positionX, int $positionY, int $square, int $cost)
    {
        $this->positionX = $positionX;
        $this->positionY = $positionY;
        $this->square = $square;
        $this->cost = $cost;
    }

    public function getSquare()
    {
        return $this->square;
    }

    public function getCoordinates()
    {
        return [$this->positionX, $this->positionY];
    }

    public function getConstructionCost()
    {
        return $this->cost;
    }

    public function getLevelCost()
    {
        return $this->cost;
    }
}