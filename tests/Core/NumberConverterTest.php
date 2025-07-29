<?php

namespace FizzBuzz\Core;

use PHPUnit\Framework\TestCase;

class NumberConverterTest extends TestCase
{
    public function testConvertWithEmptyRules()
    {
        $fizzBuzz = new NumberConverter([]);
        $this->assertEquals("", $fizzBuzz->convert(1));
    }

    public function testConvert()
    {
        $rule = $this->createMock(ReplaceRuleInterface::class);
        $rule->expects($this->atLeastOnce())
            ->method("replace")
            ->with(1)
            ->willReturn("Replaced");

        $fizzBuzz = new NumberConverter([$rule]);
        $this->assertEquals("Replaced", $fizzBuzz->convert(1));
    }
}