<?php

namespace FizzBuzz\App;

use FizzBuzz\Core\NumberConverter;
use PHPUnit\Framework\TestCase;

class FizzBuzzSequencePrinterTest extends TestCase
{
    public function testPrintNone(): void
    {
        $converter = $this->createMock(NumberConverter::class);
        $converter->expects($this->never())->method('convert');

        $output = $this->createMock(OutputInterface::class);
        $output->expects($this->never())->method('write');

        $printer = new FizzBuzzSequencePrinter($converter, $output);
        $printer->printRange(0, -1);
    }
}
