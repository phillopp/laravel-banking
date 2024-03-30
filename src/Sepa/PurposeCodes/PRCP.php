<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code PRCP
 *
 * Transaction is related to a payment of a price.
 */
class PRCP extends PurposeCode
{
    private string $code = 'PRCP';
    private string $description = 'Transaction is related to a payment of a price.';
}