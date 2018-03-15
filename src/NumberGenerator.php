<?php

namespace Kata;

use Kata\Rules\Contains;
use Kata\Rules\MultipleOf;
use Kata\Rules\Rule;

class NumberGenerator
{
    private const QIX = 'qix';
    private const BAR = 'bar';
    private const FOO = 'foo';

    /**  @var Rule[] */
    private $rules;

    public function __construct()
    {
        $this->rules = [
            new MultipleOf(3, self::FOO),
            new Contains(3, self::FOO),
            new MultipleOf(5, self::BAR),
            new Contains(5, self::BAR),
            new MultipleOf(7, self::QIX),
            new Contains(7, self::QIX),
        ];
    }

    /**
     * @return mixed[]
     */
    public function generate()
    {
        return array_map(
            function (int $number) {
                $generatedValue = array_reduce(
                    $this->rules,
                    function (?string $carry, Rule $rule) use ($number) {
                        if ($rule->isSatisfied($number)) {
                            $carry .= $rule->getValue($number);
                        };

                        return $carry;
                    },
                    null
                );

                if ($generatedValue === null) {
                    return $number;
                }

                return $generatedValue;
            },
            range(1, 40)
        );
    }
}
