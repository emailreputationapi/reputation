<?php

namespace WJGilmore\LaravelEmailreputationapi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \WJGilmore\LaravelEmailreputationapi\Validate
 */
class Validate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \WJGilmore\LaravelEmailreputationapi\Validate::class;
    }
}
