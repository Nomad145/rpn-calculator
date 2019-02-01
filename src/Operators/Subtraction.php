<?php

namespace App\Operators;

/**
 * The subtraction operator.
 *
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class Subtraction implements OperatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function __invoke(float $operandA, float $operandB): float
    {
        return $operandA - $operandB;
    }
}
