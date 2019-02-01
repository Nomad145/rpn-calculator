<?php

namespace Tests\Operators;

use App\Operators\Addition;
use PHPUnit\Framework\TestCase;

/**
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class AdditionTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testAdditionOperator(float $operandA, float $operandB, float $result)
    {
        $subject = new Addition();

        $this->assertEquals($result, $subject($operandA, $operandB));
    }

    public function dataProvider()
    {
        return [
            [0.0, 1.0, 1.0],
            [1.0, 3.0, 4.0],
            [1000, 3500, 4500],
            [-100, -900, -1000],
            [-1.0, 900.0, 899.0],
        ];
    }
}
