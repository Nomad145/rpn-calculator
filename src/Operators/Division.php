<?php

namespace App\Operators;

/**
 * The division operator.
 *
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class Division implements OperatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function __invoke(float $operandA, float $operandB): float
    {
        if (0.0 === $operandB) {
            return INF;
        }

        return $operandA / $operandB;
    }
}
