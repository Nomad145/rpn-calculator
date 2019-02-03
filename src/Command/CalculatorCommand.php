<?php

namespace App\Command;

use App\CalculatorInterface;
use App\Exception\ExpressionException;
use App\Exception\InsufficientOperandsException;
use App\Expression;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\StreamableInputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class CalculatorCommand extends Command
{
    private const STOP_INPUT = ['q', 'quit', 'stop'];

    private const USER_PROMPT = '> ';

    /** @var string */
    protected static $defaultName = 'calculator';

    /** @var CalculatorInterface */
    private $calculator;

    /**
     * @param CalculatorInterface $calculator
     */
    public function __construct(CalculatorInterface $calculator)
    {
        parent::__construct();

        $this->calculator = $calculator;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setDescription('An interactive calculator')
            ->setHelp('Start the interactive calculator')
            ->addArgument('expression', InputArgument::OPTIONAL, 'An expression to be evaluated');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $expression = $this->getExpressionFromInput($input);

        if (null !== $expression) {
            $exitCode = $this->evaluate($expression, $output);

            return $exitCode;
        }

        $this->startInteractiveInput($input, $output);

        return 0;
    }

    /**
     * Get the expression from user input.
     *
     * Resolves input from either the command argument or from STDIN.  If no
     * input given, null is returned.
     *
     * @param InputInterface $input
     *
     * @return string|null
     */
    private function getExpressionFromInput(InputInterface $input): ?string
    {
        if (null !== $input->getArgument('expression')) {
            return $input->getArgument('expression');
        }

        if (0 === ftell(STDIN)) {
            return $this->readUserInput(STDIN);
        }

        return null;
    }

    /**
     * Start interactive input.
     *
     * When in interactive mode, the user will be prompted for input until one
     * of {@see self::STOP_INPUT} is given.
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     */
    private function startInteractiveInput(InputInterface $input, OutputInterface $output): void
    {
        $stream = $this->getInputStream($input);

        while (true) {
            $output->write(self::USER_PROMPT);
            $line = $this->readUserInput($stream);

            if (false === $line) {
                break;
            }

            if ($this->shouldStop($line)) {
                break;
            }

            $this->evaluate($line, $output);
        }
    }

    /**
     * Evaluate user input and display the result to the screen.
     *
     * @param string          $input  An expression as input
     * @param OutputInterface $output
     *
     * @return int 0 if the evaluation was successful
     *             1 if the evaluate encountered errors
     */
    private function evaluate(string $input, OutputInterface $output)
    {
        try {
            $result = $this->calculator->evaluate(Expression::fromInput($input));
            $output->writeln($result);

            return 0;
        } catch (ExpressionException | InsufficientOperandsException $e) {
            $output->writeln(sprintf('<error>%s</error>', $e->getMessage()));

            return 1;
        }
    }

    /**
     * Get the input stream for the current command.
     *
     * @param InputInterface $input
     *
     * @return resource The input stream
     */
    private function getInputStream(InputInterface $input)
    {
        if ($input instanceof StreamableInputInterface) {
            $stream = $input->getStream();

            if (null !== $stream) {
                return $stream;
            }
        }

        return STDIN;
    }

    /**
     * Read user input from the input stream.
     *
     * Returns false if nothing can be read from the stream.
     *
     * @param resource $stream
     *
     * @return bool|string
     */
    private function readUserInput($stream)
    {
        $line = fgets($stream, 4096);

        if (false === $line) {
            return false;
        }

        return trim($line);
    }

    /**
     * Determine if the user has decided to quit.
     *
     * Returns true if the user's input is one of {@see self::STOP_INPUT}.
     *
     * @param string $input
     *
     * @return bool
     */
    private function shouldStop(string $input): bool
    {
        return in_array($input, self::STOP_INPUT);
    }
}
