<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code TRFD
 *
 * Transaction is related to a payment of a trust fund.
 */
class TRFD extends PurposeCode
{
    private string $code = 'TRFD';
    private string $description = 'Transaction is related to a payment of a trust fund.';
}