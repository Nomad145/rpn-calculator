<?php

use App\Command\CalculatorCommand;
use App\RPNCalculator;
use Symfony\Component\Console\Application;

require_once 'vendor/autoload.php';

$command = new CalculatorCommand(new RPNCalculator());
$app = new Application();

$app->add($command);
$app->setDefaultCommand($command->getName());
$app->run();
