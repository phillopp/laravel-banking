<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code FREX
 *
 * Transaction is related to a foreign exchange operation.
 */
class FREX extends PurposeCode
{
    private string $code = 'FREX';
    private string $description = 'Transaction is related to a foreign exchange operation.';
}