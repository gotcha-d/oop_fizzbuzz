<?php

namespace FizzBuzz\Core;

/**
 * 「FizzBuzzはなんらかの法則で整数を文字列に置換するルールがある」
 * という抽象で全体を捉えたインターフェース
 */
interface ReplaceRuleInterface
{
    public function replace(int $n): string;
}