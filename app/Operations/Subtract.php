<?php

namespace App\Operations;

class Subtract implements OperationInterface
{
    public function supports(string $symbol): bool
    {
        return $symbol === '-';
    }

    public function apply(float $a, float $b): float
    {
        return $a - $b;
    }
}
