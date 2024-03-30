<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code COST
 *
 * Transaction is related to payment of costs.
 */
class COST extends PurposeCode
{
    private string $code = 'COST';
    private string $description = 'Transaction is related to payment of costs.';
}