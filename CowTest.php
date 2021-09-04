<?php

use PHPUnit\Framework\TestCase;

class CowTest extends TestCase
{
    public function testCowSuccess()
    {
        $cow = new Cow();

        $this->assertSame(true);

    }
}