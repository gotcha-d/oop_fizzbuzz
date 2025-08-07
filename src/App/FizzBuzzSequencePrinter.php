<?php

namespace FizzBuzz\App;

use FizzBuzz\Core\NumberConverter;

class FizzBuzzSequencePrinter
{
    /**
     * コンストラクタ
     *
     * @param NumberConverter $converter
     * @param OutputInterface $output
     */
    public function __construct(
        protected NumberConverter $converter,
        protected OutputInterface $output){}

    public function printRange(int $begin, int $end): void
    {
        for ($i = $begin; $i <= $end; $i++){
            $text = $this->converter->convert($i);
            $outputText = sprintf("%d %s\n", $i, $text);
            $this->output->write($outputText);
        }
    }
}
