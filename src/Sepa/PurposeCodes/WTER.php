<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code WTER
 *
 * Transaction is related to a payment of water bill.
 */
class WTER extends PurposeCode
{
    private string $code = 'WTER';
    private string $description = 'Transaction is related to a payment of water bill.';
}