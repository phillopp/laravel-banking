<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code VIEW
 *
 * Transaction is a payment for vision care services.
 */
class VIEW extends PurposeCode
{
    private string $code = 'VIEW';
    private string $description = 'Transaction is a payment for vision care services.';
}