<?php

namespace App\Exception;

use OutOfBoundsException;

/**
 * Occurs when attempting to evaluate an expression with an insufficient number
 * of operands.
 *
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class InsufficientOperandsException extends OutOfBoundsException
{
    protected const EXCEPTION_MESSAGE = 'Cannot evaluate an expression with less than two operands on the stack.';

    /** @var string */
    protected $message = self::EXCEPTION_MESSAGE;
}
