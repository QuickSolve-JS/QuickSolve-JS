<?php

namespace QuickSolve\Calc;

use Illuminate\Support\ServiceProvider;
use QuickSolve\Calc\Actions\AddTax;
use QuickSolve\Calc\Actions\ApplyDiscount;

class CalcServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('quicksolve', function ($app) {
            return new CalculationEngine(
                $app->make(AddTax::class),
                $app->make(ApplyDiscount::class),
            );
        });
    }

    public function boot()
    {

    }
}