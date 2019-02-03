<?php

namespace App;

use App\Exception\CalculatorException;

/**
 * Defines behavior of Calculator Implementations.
 *
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
interface CalculatorInterface
{
    /**
     * Evaluate an expression.
     *
     * @param Expression $expression
     *
     * @return float
     *
     * @throws CalculatorException
     */
    public function evaluate(Expression $expression): float;
}
