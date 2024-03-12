<?php

namespace Rrim\PhpUnitTesting;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testManual(): void
    {
        $this->assertEquals(10, Math::sum([5, 5]));
    }

    public static function mathSumData(): array
    {
        return [
            [[5, 5], 10],
            [[5, 5, 5, 5], 20],
            [[3, 3, 3], 9]
        ];
    }

    #[DataProvider('mathSumData')]
    public function testSumArray(array $values, int $expected)
    {
        $this->assertEquals($expected, Math::sum($values));
    }
}
