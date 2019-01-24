<?php

namespace Tests;

use App\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testExample()
    {
        $example = new Example();

        $this->assertInstanceOf(Example::class, $example);
    }

    public function testGetFoo()
    {
        $example = new Example();

        $this->assertSame($example->getFoo(), 'foo');
    }
}
