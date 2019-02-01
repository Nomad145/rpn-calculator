<?php

namespace App\Operators;

/**
 * The multiplication operator.
 *
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class Multiplication implements OperatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function __invoke(float $operandA, float $operandB): float
    {
        return $operandA * $operandB;
    }
}
