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

        $bee->setType('queen');
        $this->assertEquals('queen', $bee->getType());
    }
}