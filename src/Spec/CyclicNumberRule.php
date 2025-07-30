<?php

namespace FizzBuzz\Spec;

use FizzBuzz\Core\ReplaceRuleInterface;

class CyclicNumberRule implements ReplaceRuleInterface
{
    public function __construct(protected int $base, protected string $replacement)
    {
        
    }
    public function replace(int $n): string
    {
        return ($n % $this->base == 0 ) ? $this->replacement : "";
    }
}