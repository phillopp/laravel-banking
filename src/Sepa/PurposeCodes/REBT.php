<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code REBT
 *
 * Transaction is the payment of a rebate.
 */
class REBT extends PurposeCode
{
    private string $code = 'REBT';
    private string $description = 'Transaction is the payment of a rebate.';
}