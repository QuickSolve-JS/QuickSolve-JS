<?php

namespace QuickSolve\Calc;

use QuickSolve\Calc\Actions\AddTax;
use QuickSolve\Calc\Actions\ApplyDiscount;

/**
 * Class CalculationEngine
 * * High-precision calculation engine for Laravel POS systems.
 * @package QuickSolve\Calc
 */

class CalculationEngine
{
    /**
     * @var float The current running total of the calculation.
     */

    private float $result = 0;

    /**
     * CalculationEngine constructor.
     * @param AddTax $addTaxAction
     * @param ApplyDiscount $applyDiscountAction
     */

    public function __construct(protected AddTax $addTaxAction, protected ApplyDiscount $applyDiscountAction){}

    /**
     * Set the initial base amount for the calculation.
     * @param float $amount
     * @return $this
     */

    public function setAmount(float $amount): self
    {
        $this->result = $amount;
        return $this;
    }

    /**
     * Apply tax percentage to the current result.
     * @param float $percentage
     * @return $this
     */

    public function addTax(float $percentage): self
    {
        $this->result = $this->addTaxAction->execute($this->result, $percentage);
        return $this;
    }

    /**
     * Apply a flat discount amount to the current result.
     * @param float $amount
     * @return $this
     */

    public function applyDiscount(float $amount): self
    {
        $this->result = $this->applyDiscountAction->execute($this->result, $amount);
        return $this;
    }

    /**
     * Get the final raw calculation result.
     * @return float
     */

    public function get(): float
    {
        return $this->result;
    }

    /**
     * Get the formatted result as a string with currency.
     * @param string $currency (e.g., LKR, USD)
     * @return string
     */

    public function format(string $currency): string
    {
        return $currency . ' ' . number_format($this->result, 2);
    }
}