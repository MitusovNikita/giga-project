<?php
// cmd
// php bin/phpunit tests/try/UnitControllerTest.php

use PHPUnit\Framework\TestCase;

class UnitControllerTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testIndex(int $a, int $b, int $expected)
    {
        $this->assertSame($expected, $a + $b);

        $this->assertTrue(true);
        $this->assertEmpty(null);
        $this->assertContains(4, [1, 2, 3]);
        $this->assertStringContainsString('foo', 'bar');
    }

    public function additionProvider(): array
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 3]
        ];
    }
}