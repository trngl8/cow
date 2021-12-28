<?php

namespace App;

class Bee extends Animal
{
    //TODO: set type in constructor

    const TYPE_QUEEN = 'q';
    const TYPE_DRONE = 'd'; //maybe another word
    const TYPE_WORK = 'w'; //maybe another word

    private static array $types = [
        self::TYPE_QUEEN,
        self::TYPE_DRONE,
        self::TYPE_WORK,
    ];

    private string $type;

    public function voice(): ?string
    {
       return 'Bzzzz';
    }

    public function setType(string $type)
    {
        if(!in_array($type, self::$types)) {
            throw new \RuntimeException("Unsupported type");
        }

        $this->type = $type;
    }

    public function getType() : string
    {
        return $this->type;
    }
}