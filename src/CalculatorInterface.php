<?php

namespace App;

use App\Expression;

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
     */
    public function evaluate(Expression $expression): float;
}
