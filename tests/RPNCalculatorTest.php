<?php

namespace Tests;

use App\Exception\InsufficientOperandsException;
use App\Operators\Addition;
use App\RPNCalculator;
use PHPUnit\Framework\TestCase;
use App\ValueObject\Expression;

/**
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class RPNCalculatorTest extends TestCase
{
    /**
     * The Subject Under Test.
     *
     * @var RPNCalculator
     */
    private $subject;

    public function setUp()
    {
        $this->subject = new RPNCalculator();
    }

    public function testEvaluateThrowsInsufficientOperandsException()
    {
        $this->expectException(InsufficientOperandsException::class);
        $this->expectExceptionMessage('Cannot evaluate an expression with less than two operands on the stack.');

        $this->subject->evaluate(Expression::fromInput('+'));
    }

    public function testEvaluate()
    {
        $this->assertEquals(
            22.0,
            $this->subject->evaluate(Expression::fromInput('7.0 10.0 5.0 + +'))
        );

        $this->assertEquals(
            3.3,
            $this->subject->evaluate(Expression::fromInput('2.3 1 +'))
        );

        $this->assertEquals(
            25.3,
            $this->subject->evaluate(Expression::fromInput('+'))
        );

        $this->assertEquals(
            13.0,
            $this->subject->evaluate(Expression::fromInput('0.7 + 2 /'))
        );

        $this->assertEquals(
            9.0,
            $this->subject->evaluate(Expression::fromInput('4 -'))
        );

        $this->assertEquals(
            0.0,
            $this->subject->evaluate(Expression::fromInput('3 %'))
        );
    }
}
