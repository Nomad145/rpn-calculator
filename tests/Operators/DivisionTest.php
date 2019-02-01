<?php

namespace Tests\Operators;

use App\Operators\Division;
use PHPUnit\Framework\TestCase;

/**
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class DivisionTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testDivisionOperator(float $operandA, float $operandB, float $result)
    {
        $subject = new Division();

        $this->assertEquals($result, $subject($operandA, $operandB));
    }

    public function dataProvider()
    {
        return [
            [0.0, 1.0, 0.0],
            [3.0, 0.0, INF],
            [-900, -100, 9],
            [3500, 1000, 3.5],
            [900.0, 10.0, 90.0],
        ];
    }
}
