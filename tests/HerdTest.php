<?php

namespace App\Tests;

use App\Herd;
use App\Sheep;
use PHPUnit\Framework\TestCase;

class HerdTest extends TestCase
{
    public function testHerdSheeps() : void
    {
        $herd = new Herd(Sheep::class, 100);

        //check instance of herd item
        $item = $herd->getAnimals();
        $this->assertInstanceOf(Sheep::class, array_pop($item));

        $herd->add(new Sheep());
        $this->assertCount(101, $herd->getAnimals());
    }
}