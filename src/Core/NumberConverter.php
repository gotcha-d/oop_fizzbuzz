<?php

namespace FizzBuzz\Core;

class NumberConverter
{
    /**
     * @param ReplaceRuleInterface $rules
     */
    public function __construct(protected array $rules)
    {
        // NumberConverterはReplaceRuleInterfaceの集約
    }

    public function convert(int $n)
    {
        $carry = '';
        foreach ($this->rules as $rule) {
            if ($rule->match($carry, $n)) {
                $carry = $rule->apply($carry, $n);
            }
        }
        return $carry;
    }
}