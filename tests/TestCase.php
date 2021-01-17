<?php

namespace Boolxy\Random\Tests;

use Boolxy\Random\Random;

class TestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * Main Class.
     *
     * @var Random
     */
    protected Random $random;

    /**
     * Setup.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->random = new Random();
    }
}
