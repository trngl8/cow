<?php

namespace App\Tests;

use App\Animal;
use App\MilkTank;
use PHPUnit\Framework\TestCase;
use App\Cow;

class CowTest extends TestCase
{
    public function testCowAnimal()
    {
        $cow = new Cow();

        //Cow belongs to the class of animals.
        $this->assertInstanceOf(Animal::class, $cow);
    }

    public function testCowFunctions()
    {
        $cow = new Cow();
        $sound = $cow->voice();

        $this->assertEquals('muuuuuuu', $sound);

        //Cow can eat grass (herb) and produce milk.
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