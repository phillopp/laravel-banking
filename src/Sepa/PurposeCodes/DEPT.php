<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code DEPT
 *
 * Transaction is releted to a payment of deposit.
 */
class DEPT extends PurposeCode
{
    private string $code = 'DEPT';
    private string $description = 'Transaction is releted to a payment of deposit.';
}