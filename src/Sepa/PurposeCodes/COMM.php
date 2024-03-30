<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code COMM
 *
 * Transaction is payment of commission.
 */
class COMM extends PurposeCode
{
    private string $code = 'COMM';
    private string $description = 'Transaction is payment of commission.';
}