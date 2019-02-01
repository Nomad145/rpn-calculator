<?php

namespace App\Command;

use App\RPNCalculator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\StreamableInputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\ValueObject\Expression;
use App\Exception\ExpressionException;

/**
 * @author Michael Phillips <michael.phillips@realpage.com>
 */
class RPNCommand extends Command
{
    private const STOP_INPUT = [
        'q',
        'quit',
        'stop',
    ];

    /** @var string */
    protected static $defaultName = 'calculator';

    /** @var RPNCalculator */
    private $calculator;

    /**
     * The command input stream.
     *
     * @var resource
     */
    private $stream;

    public function __construct(RPNCalculator $calculator)
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
            ->setDescription('Start the RPN Calculator')
            ->setHelp('This command starts an interactive RPN calculator.')
            ->addArgument('expression', InputArgument::OPTIONAL, 'An expression to be evaluated');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if ($expression = $input->getArgument('expression')) {
            $output->writeln($this->calculator->evaluate(Expression::fromInput($expression)));

            return 0;
        }

        $this->startInteractiveInput($input, $output);
    }

    public function startInteractiveInput(InputInterface $input, OutputInterface $output)
    {
        $stream = $this->getInputStream($input);

        while (true) {
            $output->write('> ');
            $line = $this->readUserInput($stream);

            if ($this->shouldStop($line)) {
                break;
            }

            try {
                $result = $this->calculator->evaluate(Expression::fromInput($line));

                $output->writeln($result);
            } catch (ExpressionException $e) {
                $output->writeln(sprintf('<error>%s</error>', $e->getMessage()));
            }
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
     * Returns false if nothing can be read from the stream, or if the user has
     * chosen to quit the command.
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
     * Determine if the user has requested to stop.
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
