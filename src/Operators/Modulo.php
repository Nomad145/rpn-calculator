<?php

namespace App\Operators;

/**
 * The modulo operator.
 *
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class Modulo implements OperatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function __invoke(float $operandA, float $operandB): float
    {
        if (0.0 === $operandB) {
            return 0.0;
        }

        return $operandA % $operandB;
    }
}
