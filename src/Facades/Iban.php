<?php

namespace Phillopp\LaravelBanking\Facades;
use Illuminate\Support\Facades\Facade;

class Iban extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return \Phillopp\LaravelBanking\Iban\Service::class;
    }
}