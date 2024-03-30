<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code RLWY
 *
 * Transaction is a payment for railway transport related business.
 */
class RLWY extends PurposeCode
{
    private string $code = 'RLWY';
    private string $description = 'Transaction is a payment for railway transport related business.';
}