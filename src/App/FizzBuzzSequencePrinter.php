<?php

namespace FizzBuzz\App;

use FizzBuzz\Core\NumberConverter;
use FizzBuzz\Spec\CyclicNumberRule;
use FizzBuzz\Spec\PassThroughRule;

class FizzBuzzSequencePrinter
{
    public function printRange(int $begin, int $end): void
    {
        // 自力でNumberConverterオブジェクトを生成している
        // 別のパッケージに強い依存が生まれていて、FizzBuzzSequencePrinter の単体テストのために具象レベルの依存が強いられる
        $fizzBuzz = new NumberConverter([
            new CyclicNumberRule(3, "Fizz"),
            new CyclicNumberRule(5, "Buzz"),
            new PassThroughRule(),
        ]);
        for ($i = $begin; $i <= $end; $i++){
            printf("%d %s\n", $i, $fizzBuzz->convert($i));
        }
    }
}