<?php

namespace App\Tests;

use App\MilkTank;
use PHPUnit\Framework\TestCase;
use App\Cow;

class CowTest extends TestCase
{
    public function testCowSuccess()
    {
        $cow = new Cow();
        $sound = $cow->voice();

        $this->assertEquals('muuuuuuu', $sound);

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
    }

}