<?php

namespace App\Factory;

use App\Operators\OperatorInterface;

/**
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
interface OperatorFactoryInterface
{
    /**
     * Create an Operator from its symbol.
     *
     * ```
     * OperatorFactory::makeFromSymbol('+');
     * ```
     *
     * @param string $symbol
     *
     * @return OperatorInterface
     */
    public static function makeFromSymbol(string $symbol): OperatorInterface;

    /**
     * Get a list of operators supported by this factory.
     *
     * ```
     * ['+', '-', '/']
     * ```
     *
     * @return array
     */
    public static function getSupportedOperators(): array;

    /**
     * Determine if the given operator is supported by the factory.
     *
     * @param string $operator
     *
     * @return bool
     */
    public static function supports(string $operator): bool;
}
