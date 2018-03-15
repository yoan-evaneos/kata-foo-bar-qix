<?php

namespace Kata\Rules;

interface Rule
{
    public function isSatisfied(int $number): bool;

    public function getValue(int $number): string;
}
