<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code TREA
 *
 * Transaction is related to treasury operations.
 */
class TREA extends PurposeCode
{
    private string $code = 'TREA';
    private string $description = 'Transaction is related to treasury operations.';
}