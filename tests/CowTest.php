<?php

namespace App\Tests;

use App\MilkTank;
use App\Cow;
use App\Head;
use App\Udder;

use PHPUnit\Framework\TestCase;

class CowTest extends TestCase
{
    public function testCowSuccess()
    {
        $cow = new Cow(new Head(), new Udder());

        $cow->buildMilk();
        $milk = $cow->getMilk();

        $b = new MilkTank();
        $b->add($milk);

        $this->assertIsInt($milk);
    }

    public function testMilkTankSuccess()
    {
        $b = new MilkTank();
        $b->add(6);

        $this->assertEquals(6, $b->getLevel());
    }

    public function testMilkTankException()
    {
        $this->expectException(\Exception::class);

        $b = new MilkTank();
        $b->add(641);
    }
}