<?php

namespace Boolxy\Random\Tests;

use Boolxy\Random\Random;

class RandomTest extends TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf(Random::class, $this->random);
    }

    public function testNum()
    {
        $this->assertEquals(4, strlen($this->random->num()));
        $this->assertEquals(10, strlen($this->random->num(10)));
        $this->assertIsNumeric($this->random->num(1));
    }

    public function testStr()
    {
        $this->assertEquals(8, strlen($this->random->str()));
        $this->assertEquals(10, strlen($this->random->str(10)));
        $this->assertIsNotNumeric($this->random->str(1));
    }

    public function testAlpha()
    {
        $this->assertEquals(16, strlen($this->random->alpha()));
        $this->assertEquals(20, strlen($this->random->alpha(20)));
    }
}
