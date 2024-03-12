<?php

namespace Rrim\PhpUnitTesting;

use PHPUnit\Framework\Attributes\AfterClass;
use PHPUnit\Framework\Attributes\BeforeClass;
use PHPUnit\Framework\Attributes\RequiresOperatingSystem;
use PHPUnit\Framework\Attributes\RequiresOperatingSystemFamily;
use PHPUnit\Framework\TestCase;

class CounterStatic extends TestCase
{

    private static Counter $counter;

    #[BeforeClass]
    public static function values(): void
    {
        self::$counter = new Counter();
    }

    public function testIncrement()
    {
        self::assertEquals(0, self::$counter->getCounter());
        $this->markTestIncomplete("Need to counter again");
    }

    public function testFirst()
    {
        self::$counter->increment();
        self::assertEquals(1, self::$counter->getCounter());
    }

    public function testSecond()
    {
        self::$counter->increment();
        self::assertEquals(2, self::$counter->getCounter());
    }

    #[RequiresOperatingSystemFamily("Darwin")]
    public function testError()
    {
        $this->markTestSkipped("Skip sementara");
        self::assertEquals(0, self::$counter->getCounter());
    }

    #[AfterClass]
    public static function endOf(): void
    {
        echo "Unit test selesai" . PHP_EOL;
    }
}
