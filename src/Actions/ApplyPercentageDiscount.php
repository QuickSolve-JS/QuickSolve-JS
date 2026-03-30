<?php

namespace QuickSolve\Calc\Actions;

use QuickSolve\Calc\Contracts\CalculatorAction;

class ApplyPercentageDiscount implements CalculatorAction
{

    public function execute(float $currentValue, float $inputValue): float
    {
        $discountAmount = bcdiv(bcmul((string)$currentValue, (string)$inputValue, 4), '100', 4);
        $finalAmount = bcsub((string)$currentValue, $discountAmount, 4);
        return (float)$finalAmount;
    }
}