<?php

namespace QuickSolve\Calc\Facades;

use Illuminate\Support\Facades\Facade;

class QuickSolve extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'quicksolve';
    }
}