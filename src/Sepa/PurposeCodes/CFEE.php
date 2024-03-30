<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CFEE
 *
 * Transaction is related to a payment of cancellation fee.
 */
class CFEE extends PurposeCode
{
    private string $code = 'CFEE';
    private string $description = 'Transaction is related to a payment of cancellation fee.';
}