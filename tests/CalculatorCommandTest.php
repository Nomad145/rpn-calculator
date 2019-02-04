<?php

namespace Tests;

use App\CalculatorInterface;
use App\Command\CalculatorCommand;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;
use App\RPNCalculator;

/**
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class CalculatorCommandTest extends TestCase
{
    private $tester;

    public function setUp()
    {
        $calculator = new RPNCalculator();
        $subject = new CalculatorCommand($calculator);

        $this->tester = new CommandTester($subject);
    }

    public function testExecuteWithCommandArgument()
    {
        $exitCode = $this->tester->execute(['expression' => '2 3 *']);

        $this->assertEquals('6' . PHP_EOL, $this->tester->getDisplay());
        $this->assertEquals(0, $exitCode);
    }

    public function testExecuteWithPipedArgument()
    {
        $this->tester->setInputs(['2 3 *']);
        $exitCode = $this->tester->execute([]);

        $this->assertEquals('6' . PHP_EOL, $this->tester->getDisplay());
        $this->assertEquals(0, $exitCode);
    }

    public function testExecuteWithExpressionError()
    {
        $exitCode = $this->tester->execute(['expression' => '2 3 ?']);

        $this->assertEquals('Expression "2 3 ?" contains invalid values.' . PHP_EOL, $this->tester->getDisplay());
        $this->assertEquals(1, $exitCode);
    }
}
