<?php

use App\Math;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase{
    public function testFibonacci() {
        $math = new Math();
        $this->assertEquals(34, $math->fibonacci(9));
    }

    public function testFactorial() {
        $math = new Math();
        $this->assertEquals(120, $math->factorial(5));
    }

    public function testFactorialGreaterThanFibonacci() {
        $this->assertTrue($math->factorial(6) > $math->fibonacci(6));
    }
}