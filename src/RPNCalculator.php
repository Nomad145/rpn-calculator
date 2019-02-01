<?php

namespace App;

use App\Exception\InsufficientOperandsException;
use App\Operators\OperatorInterface;

/**
 * A Reverse Polish Notation Calculator.
 *
 * Pushes operands onto a stack for evaluation.
 *
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class RPNCalculator implements CalculatorInterface
{
    /** @var array */
    private $stack = [];

    /**
     * {@inheritdoc}
     */
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
     * Evaluate an expression with two operands from the stack.
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

    /**
     * Push an operand onto the stack.
     *
     * @param float $operand
     *
     * @return float
     */
    private function push(float $operand): float
    {
        array_unshift($this->stack, $operand);

        return $operand;
    }
}
