<?php

namespace Mario1515\LaravelCart\Facades;

use Illuminate\Support\Facades\Facade;

class Cart extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-cart';
    }
}
