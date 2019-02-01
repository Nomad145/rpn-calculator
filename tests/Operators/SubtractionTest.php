<?php

namespace Tests\Operators;

use App\Operators\Subtraction;
use PHPUnit\Framework\TestCase;

/**
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class SubtractionTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSubtractionOperator(float $operandA, float $operandB, float $result)
    {
        $subject = new Subtraction();

        $this->assertEquals($result, $subject($operandA, $operandB));
    }

    public function dataProvider()
    {
        return [
            [0.0, 1.0, -1.0],
            [3.0, 1.0, 2.0],
            [3500, 1000, 2500],
            [-100, -900, 800],
            [900.0, 10.0, 890.0],
        ];
    }
}
