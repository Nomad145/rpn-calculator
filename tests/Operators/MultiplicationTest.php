<?php

namespace Tests\Operators;

use App\Operators\Multiplication;
use PHPUnit\Framework\TestCase;

/**
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class MultiplicationTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testMultiplicationOperator(float $operandA, float $operandB, float $result)
    {
        $subject = new Multiplication();

        $this->assertEquals($result, $subject($operandA, $operandB));
    }

    public function dataProvider()
    {
        return [
            [0.0, 1.0, 0.0],
            [3.0, 1.0, 3.0],
            [900.0, -10.0, -9000.0],
            [-100.0, -900.0, 90000.0],
            [3500.0, 1000.0, 3500000.0],
        ];
    }
}
