<?php

namespace FizzBuzz\Core;

/**
 * 入力された整数を使って現在値を置換する
 * という抽象で全体を捉えたインターフェース
 */
interface ReplaceRuleInterface
{
    public function apply(string $carry, int $n): string;
    public function match(string $carry, int $n): bool;
}