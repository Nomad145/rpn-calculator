<?php

namespace App\Exception;

use Exception;

/**
 * An exception thrown during Expression validation.
 *
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class ExpressionException extends Exception
{
    private const INVALID_EXPRESSION_MESSAGE = 'Expression "%s" contains invalid values.';

    private const EMPTY_EXPRESSION_MESSAGE = 'Expression cannot be empty.';

    /**
     * An exceptional case occurring when the given expression contains values
     * that are known to be invalid.
     *
     * Invalid values include non-numeric oprands and unsupported operators.
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
