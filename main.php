<?php

use App\Command\RPNCommand;
use App\RPNCalculator;
use Symfony\Component\Console\Application;

require_once 'vendor/autoload.php';

$app = new Application();
$app->add(new RPNCommand(new RPNCalculator()));

$app->run();
