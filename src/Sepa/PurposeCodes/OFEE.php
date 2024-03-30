<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code OFEE
 *
 * Transaction is related to a payment of opening fee.
 */
class OFEE extends PurposeCode
{
    private string $code = 'OFEE';
    private string $description = 'Transaction is related to a payment of opening fee.';
}