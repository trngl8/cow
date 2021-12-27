<?php

namespace App\Tests;

use App\Bee;
use App\Swarm;
use PHPUnit\Framework\TestCase;

class SwarmTest extends TestCase
{
    public function testSwarm() : void
    {
        $swarn = new Swarm(Bee::class, 100);

        $item = $swarn->getAnimals();
        $this->assertInstanceOf(Bee::class, array_pop($item));

        $swarn->raise();
        $this->assertTrue($swarn->isFly());

        $swarn->home();
        $this->assertEquals(0, $swarn->getPosition());
    }
}