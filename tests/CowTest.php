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

        $cow->buildMilk();
        $milk = $cow->getMilk();

        $this->assertIsInt($milk);

    }
}