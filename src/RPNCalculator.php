<?php

namespace App;

use App\Exception\InsufficientOperandsException;
use App\Operators\Addition;
use App\Operators\OperatorInterface;
use UnexpectedValueException;
use App\ValueObject\Expression;

/**
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class RPNCalculator
{
    /** @var array */
    private $stack = [];

    public function evaluate(Expression $expression): float
    {
        foreach ($expression->toArray() as $item) {
            if ($item instanceof OperatorInterface) {
                $result = $this->invokeOperator($item);

                continue;
            }

            $result = $this->push($item);
        }

        return $result;
    }

    /**
     * Evaluate an expression on the stack with the given operator.
     *
     * @param OperatorInterface $operator
     *
     * @throws InsufficientOperandsException
     *
     * @return float
     */
    private function invokeOperator(OperatorInterface $operator): float
    {
        [$operandA, $operandB] = $this->popValuesFromStack();
        $result = $operator($operandB, $operandA);
        $this->push($result);

        return $result;
    }

    /**
     * Push an operand onto the stack.
     *
     * @param float $operand
     */
    private function push(float $operand): float
    {
        array_unshift($this->stack, $operand);

        return $operand;
    }

    /**
     * Pop two values from the stack for evaluation.
     *
     * @throws InsufficientOperandsException
     *
     * @return array The first two values on the stack
     */
    private function popValuesFromStack(): array
    {
        if (count($this->stack) < 2) {
            throw new InsufficientOperandsException();
        }

        return array_splice($this->stack, 0, 2);
    }
}
