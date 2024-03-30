<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code GASB
 *
 * Transaction is related to a payment of gas bill.
 */
class GASB extends PurposeCode
{
    private string $code = 'GASB';
    private string $description = 'Transaction is related to a payment of gas bill.';
}