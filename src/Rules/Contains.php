<?php

namespace Kata\Rules;

class Contains implements Rule
{
    /** @var string */
    private $number;
    /** @var string */
    private $representation;

    /**
     * @param int $number
     * @param string $representation
     */
    public function __construct(int $number, string $representation)
    {
        $this->number = (string)$number;
        $this->representation = $representation;
    }

    public function isSatisfied(int $number): bool
    {
        $numberAsString = (string) $number;

        return strpos($numberAsString, $this->number) !== false;
    }

    public function getValue(int $number): string
    {
        $numberAsString = (string) $number;
        $repeat = substr_count($numberAsString, $this->number);

        return str_repeat($this->representation, $repeat);
    }
}
