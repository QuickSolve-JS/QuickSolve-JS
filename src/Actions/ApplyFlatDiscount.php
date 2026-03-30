<?php

namespace QuickSolve\Calc\Actions;

use QuickSolve\Calc\Contracts\CalculatorAction;

class ApplyFlatDiscount implements CalculatorAction
{

    public function execute(float $currentValue, float $inputValue): float
    {
        $finalAmount = bcsub((string)$currentValue, (string)$inputValue, 4);
        return (float)$finalAmount;
    }
}