<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code REFU
 *
 * Transaction is the payment of a refund.
 */
class REFU extends PurposeCode
{
    private string $code = 'REFU';
    private string $description = 'Transaction is the payment of a refund.';
}