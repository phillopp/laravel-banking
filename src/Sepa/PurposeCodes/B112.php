<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code B112
 *
 * US mutual fund trailer fee (12b-1) payment
 */
class B112 extends PurposeCode
{
    private string $code = 'B112';
    private string $description = 'US mutual fund trailer fee (12b-1) payment';
}