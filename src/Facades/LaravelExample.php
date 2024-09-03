<?php

namespace Bakhodirov\LaravelExample\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bakhodirov\LaravelExample\LaravelExample
 */
class LaravelExample extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Bakhodirov\LaravelExample\LaravelExample::class;
    }
}
