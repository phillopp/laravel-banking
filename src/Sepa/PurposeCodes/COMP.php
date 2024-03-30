<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code COMP
 *
 * Transaction is related to the payment of a compensation relating to interest loss/value date adjustment and can include fees.
 */
class COMP extends PurposeCode
{
    private string $code = 'COMP';
    private string $description = 'Transaction is related to the payment of a compensation relating to interest loss/value date adjustment and can include fees.';
}