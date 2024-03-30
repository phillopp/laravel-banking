<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code PENS
 *
 * Transaction is the payment of pension.
 */
class PENS extends PurposeCode
{
    private string $code = 'PENS';
    private string $description = 'Transaction is the payment of pension.';
}