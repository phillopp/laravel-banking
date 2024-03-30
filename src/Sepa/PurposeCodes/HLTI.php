<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code HLTI
 *
 * Transaction is a payment of health insurance.
 */
class HLTI extends PurposeCode
{
    private string $code = 'HLTI';
    private string $description = 'Transaction is a payment of health insurance.';
}