<?php

namespace App\Operators;

/**
 * The addition operator.
 *
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class Addition implements OperatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function __invoke(float $operandA, float $operandB): float
    {
        return $operandA + $operandB;
    }
}
