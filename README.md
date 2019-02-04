[![Build Status](https://travis-ci.com/Nomad145/rpn-calculator.svg?branch=master)](https://travis-ci.com/Nomad145/rpn-calculator)
[![codecov](https://codecov.io/gh/Nomad145/rpn-calculator/branch/master/graph/badge.svg)](https://codecov.io/gh/Nomad145/rpn-calculator)

# Reverse Polish Notation Calculator

This project is an implementation of a Reverse Polish Notation Calculator.

## Design Goals

* Operators are Polymorphic.  Calculators can support any operators that
  implement `OperatorInterface`.
* Operators encapsulate their own arithmetic.  The Calculator delegates to
  Operators when evaluating an expression.
* Validation is encapsulated in the `Expression` value object, cleanly
  separating concerns from other domain components.
* Additional calculators can be added with new implementations of
  `CalculatorInterface`.
* The `CalculatorCommand` can be composed with any implementation of
  `CalculatorInterface`.
* [Code is expressive of the Domain Language.](https://github.com/Nomad145/rpn-calculator/blob/master/src/Command/CalculatorCommand.php#L133)
* The Public API is well defined and [documented](https://nomad145.github.io/rpn-calculator/).
* 100% test coverage of domain code.

## Design Trade-offs

* `OperatorFactory::makeFromSymbol` requires a list of all supported Operators.
  Although this list can be resolved dynamically via PHP's Reflection API,
  avoiding extra "magic" via Reflection outweighs the benefit.  This
  implementation violates the Open Close Principle.
* In order to encapsulate validation cleanly within `Expression`,
  `OperatorFactory` is referenced statically, tightly coupling the two classes.
  As an alternative, an instance of `OperatorFactory` could be passed as a
  dependency to `RPNCalculator`, but operator and operand validation would
  happen in separate places.
* `Expression` models parts of, or a whole expression.  This may not be the
  most appropriate use of the term within the domain of mathematics.

## Installation

To install the project, run:
```
git clone git@github.com:Nomad145/rpn-calculator.git

cd rpn-calculator

# With Docker:
docker run --rm -it -v `pwd`:/app -w /app composer:latest install

# If composer is local:
composer install
```

## Usage

There are three ways to run the calculator:
```
# Interactive Mode
php ./main.php

# Via an argument
php ./main.php calculator "5 7 +"

# Via a pipe
echo "5 7 +" | php ./main.php calculator
```

You may also run `php ./main.php --help` for more information.
