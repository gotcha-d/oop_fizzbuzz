<?php

namespace FizzBuzz;

use FizzBuzz\Core\NumberConverter;
use FizzBuzz\Spec\CyclicNumberRule;
use FizzBuzz\Spec\PassThroughRule;
use PHPUnit\Framework\TestCase;

/**
 * 対応するクラスなし、全体の振る舞いに対するBDDテスト
 */
class FizzBuzzTest extends TestCase
{
    public function testFizzBuzz()
    {
        $fizzBuzz = new NumberConverter(
            [
                new CyclicNumberRule(3, "Fizz"),
                new CyclicNumberRule(5, "Buzz"),
                new PassThroughRule()
        ]);
        $this->assertEquals("1", $fizzBuzz->convert(1));
        $this->assertEquals("2", $fizzBuzz->convert(2));
        $this->assertEquals("Fizz", $fizzBuzz->convert("3"));

    }
}