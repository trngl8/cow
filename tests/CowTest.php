<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

use App\Cow;
use App\Head;
use App\Udder;

class CowTest extends TestCase
{
    public function testCowSuccess()
    {
        $cow = new Cow(new Head(), new Udder());

        $milk = $cow->buildMilk();

        //TODO: want milk to make cheese
        $this->assertTrue($milk);

    }
}