<?php

namespace Phillopp\LaravelBanking\Facades;
use Illuminate\Support\Facades\Facade;

class Transfer extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return \Phillopp\LaravelBanking\Transfer\Service::class;
    }
}