<?php

namespace App\Operations;

interface OperationInterface
{
    public function supports(string $symbol): bool;
    public function apply(float $a, float $b): float;
}
