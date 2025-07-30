<?php

namespace FizzBuzz\Spec;

use PHPUnit\Framework\TestCase;

class PassThroughRuleTest extends TestCase
{
    public function testReplaceNumberToString()
    {
        $rule = new PassThroughRule();
        $this->assertSame("1", $rule->replace(1));
    }
}