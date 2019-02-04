<?php

namespace Tests\Factory;

use PHPUnit\Framework\TestCase;
use App\Factory\OperatorFactory;
use App\Operators\Addition;
use App\Operators\Subtraction;
use App\Operators\Multiplication;
use App\Operators\Division;
use App\Operators\Modulo;

/**
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class OperatorFactoryTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testMakeFromSymbolCreatesCorrectOperatorTypes(string $symbol, string $fqcn)
    {
        $operator = OperatorFactory::makeFromSymbol($symbol);

        $this->assertInstanceOf($fqcn, $operator);
    }

    public function testGetSupportedOperators()
    {
        $operators = OperatorFactory::getSupportedOperators();

        $this->assertEquals(
            ['+', '-', '*', '/', '%'],
            $operators
        );
    }

    public function testSupports()
    {
        $this->assertTrue(OperatorFactory::supports('%'));
        $this->assertFalse(OperatorFactory::supports('?'));
    }

    public function dataProvider()
    {
        return [
            ['+', Addition::class],
            ['-', Subtraction::class],
            ['*', Multiplication::class],
            ['/', Division::class],
            ['%', Modulo::class],
        ];
    }
}
