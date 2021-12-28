<?php

namespace App\Tests;

use App\Bee;
use PHPUnit\Framework\TestCase;

class BeeTest extends TestCase
{
    public function testBeeFunctions() : void
    {
        $bee = new Bee();

        $sound = $bee->voice();

        $this->assertEquals('Bzzzz', $sound);

        $bee->setType('q');
        $this->assertEquals('q', $bee->getType());

        $this->expectException(\RuntimeException::class);
        $bee->setType('u');

    }
}