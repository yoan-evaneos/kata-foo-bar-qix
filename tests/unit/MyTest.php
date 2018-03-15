<?php

namespace Kata\Test;

use Kata\NumberGenerator;

class MyTest extends \PHPUnit_Framework_TestCase
{
    /** @var NumberGenerator */
    private $sut;

    /**
     * Init the mocks
     */
    public function setUp()
    {
        $this->sut = new NumberGenerator();
    }

    public function provideMultipleGeneratedExamples(): array
    {
        return [
            'Expect return foo when only multiple of 3' => [
                [6, 9],
                'foo',
            ],
            'Expect return bar when only multiple of 5' => [
                [10, 20],
                'bar',
            ],
            'Expect return qix when only multiple of 7' => [
                [14, 28],
                'qix',
            ],
            'Expect return fooqix when multiple of 3 and 7' => [
                [21],
                'fooqix',
            ],
        ];
    }

    public function provideContainsGeneratedExamples(): array
    {
        return [
            'Expect return foofoo when multiple of 3 and contains 3' => [
                [3],
                'foofoo',
            ],
            'Expect return foofoofoo when mutiple of three and contains two 3s' => [
                [33],
                'foofoofoo'
            ],
            'Expect return foofoobar when mutiple of three and multiple of five and contains 3' => [
                [30],
                'foofoobar'
            ],
            'Expect return foobarbar when mutiple of three and multiple of five and contains 5' => [
                [15],
                'foobarbar'
            ],
            'Expect return fooqix when mutiple of 3 and contains 7' => [
                [27],
                'fooqix'
            ]
        ];
    }

    /**
     * @dataProvider provideMultipleGeneratedExamples
     * @test
     *
     * @param array $values
     * @param string $expectedResult
     */
    public function it_checks_multiple_rules(array $values, string $expectedResult)
    {
        $generatedValues = $this->sut->generate();
        foreach ($values as $value) {
            $this->assertEquals($expectedResult, $generatedValues[$value - 1]);
        }
    }

    /**
     * @dataProvider provideContainsGeneratedExamples
     * @test
     *
     * @param array $values
     * @param string $expectedResult
     */
    public function it_checks_contains_rules(array $values, string $expectedResult)
    {
        $generatedValues = $this->sut->generate();
        foreach ($values as $value) {
            $this->assertEquals($expectedResult, $generatedValues[$value - 1]);
        }
    }
}
