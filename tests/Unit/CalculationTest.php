<?php

namespace QuickSolve\Calc\Tests\Unit;

use PHPUnit\Framework\TestCase;
use QuickSolve\Calc\CalculationEngine;
use QuickSolve\Calc\Actions\AddTax;
use QuickSolve\Calc\Actions\ApplyDiscount;

class CalculationTest extends TestCase
{
    /**
     * @test
     */
    public function test_it_can_calculate_tax_correctly()
    {
        $engine = new CalculationEngine(new AddTax(), new ApplyDiscount());

        $result = $engine->setAmount(1000)
            ->addTax(15)
            ->get();

        $this->assertEquals(1150, $result);
    }

    /**
     * @test
     */
    public function test_it_can_apply_discount_correctly()
    {
        $engine = new CalculationEngine(new AddTax(), new ApplyDiscount());

        $result = $engine->setAmount(1000)
            ->applyDiscount(200)
            ->get();

        $this->assertEquals(800, $result);
    }
}