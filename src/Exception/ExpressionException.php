<?php

namespace App\Exception;

use Exception;

/**
 * Thrown if an expression is given operands or operators that are known to be
 * invalid during runtime.
 *
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class ExpressionException extends Exception
{
    private const INVALID_EXPRESSION_MESSAGE = 'Expression "%s" contains invalid values.';

    private const EMPTY_EXPRESSION_MESSAGE = 'Expression cannot be empty.';

    /**
     * An exception case occurring when the given expression contains values
     * that are known to be invalid.
     *
     * Values include non-numeric oprands and invalid operators.
     *
     * @param array $expressionParts
     *
     * @return self
     */
    public static function forInvalidExpression(array $expressionParts): self
    {
        $message = sprintf(self::INVALID_EXPRESSION_MESSAGE, implode(',', $expressionParts));

        return new self($message);
    }

    /**
     * An exceptional case occurring when the given expression is empty.
     *
     * @return self
     */
    public static function forEmptyExpression(): self
    {
        return new self(self::EMPTY_EXPRESSION_MESSAGE);
    }
}
