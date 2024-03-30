<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code NWCH
 *
 * Transaction is related to a payment of network charges.
 */
class NWCH extends PurposeCode
{
    private string $code = 'NWCH';
    private string $description = 'Transaction is related to a payment of network charges.';
}