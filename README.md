# Test Driven Development Starter Library

This is a library to get started with Test Driven Development using PHP and PHPUnit.

## Setup

```bash
// Install the dependencies.
composer update

// Generate the PHPUnit Config
vendor/bin/phpunit --generate-config

// Run PHPUnit, will execute tests/ExampleTest.php
vendor/bin/phpunit
```

## Three Laws of Test Driven Development

The Three Laws of Test Driven Development are:

1. You are not allowed to write any production code unless it is to make a failing unit test pass.
2. You are not allowed to write any more of a unit test than is sufficient to fail; and compilation failures are failures.
3. You are not allowed to write any more production code than is sufficient to pass the one failing unit test.

Please see [Bob Martin's video tutorial](https://www.youtube.com/watch?v=qkblc5WRn-U) on this subject for more information.

## Get Going With FizzBuzz

To get going with Test Drive Development it's suggested you begin by completing the FizzBuzz test. It is a very simple test and lends itself to a 'test first' approach.

> Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”.

Your first test after your compilation test might be... ;) ;)

```php
public function testIsFizz()
{
    $fizzBuzz = new FizzBuzz();

    $this->assertTrue($fizzBuzz->isFizz(3));
}
```

## Author

If you have any questions message me on Twitter.

[@RobDWaller](https://twitter.com/RobDWaller)
