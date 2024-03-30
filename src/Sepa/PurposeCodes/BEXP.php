<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code BEXP
 *
 * Transaction is related to a payment of business expenses.
 */
class BEXP extends PurposeCode
{
    private string $code = 'BEXP';
    private string $description = 'Transaction is related to a payment of business expenses.';
}