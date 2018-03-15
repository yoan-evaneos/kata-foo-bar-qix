<?php

namespace Kata\Rules;

class MultipleOf implements Rule
{
    /** @var int */
    private $number;
    /** @var string */
    private $representation;

    /**
     * @param int $number
     * @param string $representation
     */
    public function __construct(int $number, string $representation)
    {
        $this->number = $number;
        $this->representation = $representation;
    }

    public function isSatisfied(int $number): bool
    {
        return $number % $this->number === 0;
    }

    public function getValue(int $number): string
    {
        return $this->representation;
    }
}
