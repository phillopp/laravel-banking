<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CBTV
 *
 * Transaction is related to a payment of cable TV bill.
 */
class CBTV extends PurposeCode
{
    private string $code = 'CBTV';
    private string $description = 'Transaction is related to a payment of cable TV bill.';
}