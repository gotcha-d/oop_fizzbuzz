<?php

namespace App;

use FizzBuzz\App\FizzBuzzSequencePrinter;

class App
{
    public static function main(): void
    {
        $printer = new FizzBuzzSequencePrinter();
        $printer->printRange(1, 100);
    }
}

require_once __DIR__ . '/../vendor/autoload.php';

App::main();