<?php

namespace App\Operations;

class OperationFactory
{
    protected array $operations;

    public function __construct()
    {
        $this->operations = [
            new Add(),
            new Subtract(),
            new Multiply(),
            new Divide(),
        ];
    }

    public function getOperation(string $symbol): ?OperationInterface
    {
        foreach ($this->operations as $operation) {
            if ($operation->supports($symbol)) {
                return $operation;
            }
        }

        return null;
    }
}
