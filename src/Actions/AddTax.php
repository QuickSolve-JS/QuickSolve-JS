<?php

namespace QuickSolve\Calc\Actions;

use QuickSolve\Calc\Contracts\CalculatorAction;

class AddTax implements CalculatorAction
{
    public function execute(float $currentValue, float $inputValue): float
    {
        $taxRate = bcdiv((string) $inputValue, '100', 4);
        $taxAmount = bcmul((string)$currentValue, $taxRate, 4);
        $finalAmount = bcadd((string)$currentValue, $taxAmount, 4);
        return (float)$finalAmount;
    }
}