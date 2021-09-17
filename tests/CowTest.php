<?php

namespace App\Tests;

use App\MilkTank;
use PHPUnit\Framework\TestCase;
use App\Cow;
use App\Head;
use App\Udder;

class CowTest extends TestCase
{
    public function testCowSuccess()
    {
        $head = new Head();
        $head->setEat(false);
        $udder = new Udder();

        $cow = new Cow($head, $udder);

        $cow->buildMilk(true);
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

       $this->assertIsBool($cow->eat());

        $cow->buildMilk(false);
        $this->assertIsString($cow->voice());
        $this->assertEquals('Mooooo',$cow->voice());

        $cow->buildMilk(true);
        $this->assertNull($cow->voice());

    }
}