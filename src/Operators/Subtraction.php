<?php

namespace App\Operators;

/**
 * The Subtraction operator.
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
