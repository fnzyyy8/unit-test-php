<?php

namespace Rrim\PhpUnitTesting;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;


class CounterTest extends TestCase
{
    public function testCounter()
    {
        $counter = new Counter();
        $counter->increment();
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());
    }

    #[Test]
    public function increment()
    {
        $counter = new Counter();
        $counter->increment();
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());
    }
}
