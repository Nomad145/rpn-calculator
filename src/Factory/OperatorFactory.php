<?php

namespace App\Factory;

use App\Operators\OperatorInterface;
use App\Operators\Modulo;
use App\Operators\Division;
use App\Operators\Multiplication;
use App\Operators\Subtraction;
use App\Operators\Addition;

/**
 * A static factory for creating various operators.
 *
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class OperatorFactory implements OperatorFactoryInterface
{
    private const OPERATORS = [
        '+' => Addition::class,
        '-' => Subtraction::class,
        '*' => Multiplication::class,
        '/' => Division::class,
        '%' => Modulo::class,
    ];

    /**
     * {@inheritdoc}
     */
    public static function makeFromSymbol(string $symbol): OperatorInterface
    {
        $operatorClass = self::OPERATORS[$symbol];

        return new $operatorClass;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSupportedOperators(): array
    {
        return array_keys(self::OPERATORS);
    }

    /**
     * {@inheritdoc}
     */
    public static function supports(string $operator): bool
    {
        return in_array($operator, self::getSupportedOperators());
    }
}
