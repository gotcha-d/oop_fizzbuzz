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
        $result = '';
        foreach ($this->rules as $rule) {
            $result .= $rule->replace($n);
        }
        return $result;
    }
}