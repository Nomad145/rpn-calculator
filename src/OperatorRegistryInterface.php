<?php

namespace App;

use App\Operators\OperatorInterface;

/**
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
interface OperatorRegistryInterface
{
    /**
     * Get a registered operator by it's symbol.
     *
     * @return OperatorInterface
     *
     * @throws OperatorNotFoundException
     */
    public function getOperatorBySymbol(): OperatorInterface;

    /**
     * Get a list of supported operators.
     */
    public function getSupportedOperators(): array;
}
