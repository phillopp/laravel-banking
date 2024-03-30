<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code AIRB
 *
 * Transaction is a payment for air transport related business.
 */
class AIRB extends PurposeCode
{
    private string $code = 'AIRB';
    private string $description = 'Transaction is a payment for air transport related business.';
}