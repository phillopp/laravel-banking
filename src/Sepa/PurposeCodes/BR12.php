<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code BR12
 *
 * US mutual fund trailer fee (12b-1) rebate payment
 */
class BR12 extends PurposeCode
{
    private string $code = 'BR12';
    private string $description = 'US mutual fund trailer fee (12b-1) rebate payment';
}