<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code INTE
 *
 * Transaction is payment of interest.
 */
class INTE extends PurposeCode
{
    private string $code = 'INTE';
    private string $description = 'Transaction is payment of interest.';
}