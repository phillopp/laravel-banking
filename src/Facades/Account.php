<?php

namespace Phillopp\LaravelBanking\Facades;
use Illuminate\Support\Facades\Facade;

class Account extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return \Phillopp\LaravelBanking\Account\Service::class;
    }
}