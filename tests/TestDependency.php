<?php

namespace Rrim\PhpUnitTesting;

use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class TestDependency extends TestCase
{
    #[Test]
    public function firstTest(): Counter
    {
        $counter = new Counter();
        $counter->increment();
        $this->assertEquals(1, $counter->getCounter());
        return $counter;
    }

    #[Test]
    #[Depends('firstTest')]
    public function testSecond(Counter $counter): void
    {
        $counter->increment();
        $this->assertEquals(3, $counter->getCounter());
    }
}
