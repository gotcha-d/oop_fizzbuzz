<?php

namespace FizzBuzz\Core;

class NumberConverter
{
    public function convert(int $n)
    {
        if ($n % 3 == 0) {
            return "Fizz";
        } elseif ($n % 5 == 0) {
            return "Buzz";
        } else {
            return (string) $n;
        }
    }
}