<?php

namespace App\ValueObject;

use App\Exception\ExpressionException;
use App\Factory\OperatorFactory;

/**
 * A Value Object representing a whole, or a part of an RPN expression.
 *
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class Expression
{
    /**
     * A list of valid operators.
     *
     * Note: Enumerating operators violates the Open Close Principle, but
     * allows for convenient validation in {@see self::validateExpressionParts}.
     * New Operators implementing {@see App\Operators\OpratorInterface} will
     * need to be added to this list to be considered valid by this Value Object.
     *
     * @var array
     */
    private const VALID_OPERATORS = ['+', '-', '*', '/', '%'];

    /** @var array */
    private $expressionParts;

    /**
     * Create an expression from its string representation.
     *
     * @param string $input
     *
     * @throws ExpressionException If the expression is empty
     *                             If the expression contains invalid values
     */
    public static function fromInput(string $input)
    {
        $expressionParts = explode(' ', $input);

        $expressionParts = array_filter(
            $expressionParts,
            function (string $item) {
                return '' !== $item;
            }
        );

        // `array_filter` preserves numeric keys, so we call `array_values` to
        // reorder them.
        $expressionParts = array_values($expressionParts);

        return new self($expressionParts);
    }

    /**
     * Create a new instance of Expression.
     *
     * @see self::fromInput
     *
     * @param array $expressionParts
     *
     * @throws ExpressionException If the expression is empty
     *                             If the expression contains invalid values
     */
    private function __construct(array $expressionParts)
    {
        $this->validateExpressionParts($expressionParts);
        $expressionParts = $this->convertOperators($expressionParts);

        $this->expressionParts = $expressionParts;
    }

    /**
     * Validate each element of the expression.
     *
     * @param array $expressionParts
     *
     * @throws ExpressionException If the expression is empty
     *                             If the expression contains invalid values
     */
    private function validateExpressionParts(array $expressionParts): void
    {
        if (count($expressionParts) === 0) {
            throw ExpressionException::forEmptyExpression();
        }

        array_walk(
            $expressionParts,
            function (string $item) use ($expressionParts) {
                if (!is_numeric($item) && !OperatorFactory::supports($item)) {
                    throw ExpressionException::forInvalidExpression($expressionParts);
                }
            }
        );
    }

    /**
     * Convert supported operators to their appropriate instances.
     *
     * Delegates operator creation to {@see App\Factory\OperatorFactory}.
     *
     * @param array $expressionParts
     *
     * @return array
     */
    private function convertOperators(array $expressionParts): array
    {
        return array_map(
            function (string $item) {
                if (OperatorFactory::supports($item)) {
                    return OperatorFactory::makeFromSymbol($item);
                }

                return $item;
            },
            $expressionParts
        );
    }

    /**
     * Get the expression as an array.
     *
     *   ['2.0', '3.0', '+']
     *
     * @return string[]
     */
    public function toArray(): array
    {
        return $this->expressionParts;
    }
}
