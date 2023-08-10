<?php

namespace EmailReputationAPI\Reputation\Facades;

use Illuminate\Support\Facades\Facade;

class Validate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \EmailReputationAPI\Reputation\Validate::class;
    }
}
