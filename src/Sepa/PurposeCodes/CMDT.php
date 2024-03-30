<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CMDT
 *
 * Transaction is payment of commodities.
 */
class CMDT extends PurposeCode
{
    private string $code = 'CMDT';
    private string $description = 'Transaction is payment of commodities.';
}