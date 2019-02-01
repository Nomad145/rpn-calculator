<?php

namespace App;

use App\Exception\ExpressionException;
use App\Factory\OperatorFactory;
use App\Operators\OperatorInterface;

/**
 * A Value Object representing a whole, or a part of an expression.
 *
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class Expression
{
    /** @var array[string|OperatorInterface] */
    private $expressionParts;

    /**
     * A named constructor for creating an Expression from string input.
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

        // array_filter preserves keys, so reorder the numeric indexes.
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
        $this->validateExpression($expressionParts);
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
    private function validateExpression(array $expressionParts): void
    {
        if (0 === count($expressionParts)) {
            throw ExpressionException::forEmptyExpression();
        }

        foreach ($expressionParts as $item) {
            if (!is_numeric($item) && !OperatorFactory::supports($item)) {
                throw ExpressionException::forInvalidExpression($expressionParts);
            }
        }
    }

    /**
     * Replace operator symbols in an expression with their Operator
     * implementations.
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
     * @return string[]|OperatorInterface[]
     */
    public function toArray(): array
    {
        return $this->expressionParts;
    }
}
