<?php

namespace App\Tests;

use App\Animal;
use App\MilkTank;
use App\Sheep;
use PHPUnit\Framework\TestCase;

class SheepTest extends TestCase
{
    public function testSheepFunctions()
    {
        $animal = new Sheep();
        $sound = $animal->voice();

        $this->assertEquals('Beeee', $sound);

        $result = $animal->produce();
        $this->assertGreaterThan(0, $result->getValue());
    }
}