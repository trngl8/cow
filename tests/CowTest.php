<?php

namespace App\Tests;

use App\Animals;
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

        $this->assertIsInt($milk);
        $this->assertIsBool($cow->eat());

        $cow->buildMilk(false);
        $this->assertIsString($cow->voice());
        $this->assertEquals('Mooooo',$cow->voice());

        $cow->buildMilk(true);
        $this->assertNull($cow->voice());
    }
}
