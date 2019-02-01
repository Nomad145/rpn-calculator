<?php

namespace Tests\Operators;

use App\Operators\Modulo;
use PHPUnit\Framework\TestCase;

/**
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class ModuloTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testModuloOperator(float $operandA, float $operandB, float $result)
    {
        $subject = new Modulo();

        $this->assertEquals($result, $subject($operandA, $operandB));
    }

    public function dataProvider()
    {
        return [
            [7, 2, 1],
            [9, 3, 0],
            [5, 2, 1],
            [12, 3, 0],
            [900, 100, 0],
            [0.0, 1.0, 0.0],
            [1.0, 0.0, 0.0],
            [-901.0, -2.0, -1.0],
        ];
    }
}
