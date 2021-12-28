<?php

namespace App\Tests;

use App\Bee;
use App\Larva;
use PHPUnit\Framework\TestCase;

class LarvaTest extends TestCase
{
    public function testBeeFunctions() : void
    {
        $lavra = new Larva();

        $result = $lavra->transform();

        $this->assertInstanceOf(Bee::class, $result);

        $this->expectException(\RuntimeException::class);
        $lavra->transform();
    }
}