<?php

namespace QuickSolve\Calc\Contracts;

interface CalculatorAction
{
    public function execute(float $currentValue, float $inputValue): float;
}