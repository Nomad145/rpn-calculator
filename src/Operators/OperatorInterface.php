<?php

namespace App\Operators;

/**
 * Defines the behavior of Operators.
 *
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
interface OperatorInterface
{
    /**
     * Evaluate an expression with two operands.
     *
     * @param float $operandA
     * @param float $operandB
     *
     * @return float
     */
    public function __invoke(float $operandA, float $operandB): float;

    /**
     * Determin if the operator supports the $symbol.
     *
     * @param string $symbol
     *
     * @return bool
     */
    public function supports(string $symbol): bool;
}
