<?php

namespace Test\ValueObject;

use PHPUnit\Framework\TestCase;
use App\ValueObject\Expression;
use App\Exception\ExpressionException;
use App\Operators\Addition;

/**
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class ExpressionTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testFromInputParsesRPN(string $input, array $result)
    {
        $subject = Expression::fromInput($input);

        $this->assertEquals($result, $subject->toArray());
    }

    public function testFromInputWithNonNumericValueThrowsExpressionException()
    {
        $this->expectException(ExpressionException::class);

        Expression::fromInput('a b +');
    }

    public function testFromInputWithInvalidOperatorThrowsExpressionException()
    {
        $this->expectException(ExpressionException::class);

        Expression::fromInput('1.0 4.5 ?');
    }

    public function testFromInputWithEmptyExpressionThrowsExpressionException()
    {
        $this->expectException(ExpressionException::class);

        Expression::fromInput('');
    }

    /**
     * Test against various types of space characters.
     */
    public function dataProvider(): array
    {
        return [
            ['2.0 3.0 +', ['2.0', '3.0', new Addition()]],
            ['2.0   3.0 + ', ['2.0', '3.0', new Addition()]],
            ['2.0459    3.0 +', ['2.0459', '3.0', new Addition()]],
        ];
    }
}
