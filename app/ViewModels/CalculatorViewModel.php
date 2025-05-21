<?php

namespace App\ViewModels;

class CalculatorViewModel
{
    public string $expression;
    public float|string|null $result;

    public function __construct(string $expression = '', float|string|null $result = null)
    {
        $this->expression = $expression;
        $this->result = $result;
    }

    public function toArray(): array
    {
        return [
            'expression' => $this->expression,
            'result' => $this->result,
            'buttons' => $this->buttons(),
        ];
    }

    public static function from(string $expression = '', float|string|null $result = null): array
    {
        return (new self($expression, $result))->toArray();
    }
    public function buttons(): array
    {
        return [
            [7, 8, 9, '/'],
            [4, 5, 6, '*'],
            [1, 2, 3, '-'],
            [0, '.', '=', '+'],
            ['C']
        ];
    }
}

