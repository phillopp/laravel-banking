<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code HLRP
 *
 * Transaction is related to a payment of property loan.
 */
class HLRP extends PurposeCode
{
    private string $code = 'HLRP';
    private string $description = 'Transaction is related to a payment of property loan.';
}