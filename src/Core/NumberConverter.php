<?php

namespace FizzBuzz\Core;

class NumberConverter
{
    public function convert(int $n)
    {
        if ($n % 3 == 0) {
            return "Fizz";
        } else {
            return (string) $n;
        }
    }
}