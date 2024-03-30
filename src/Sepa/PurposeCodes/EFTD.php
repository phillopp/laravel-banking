<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code EFTD
 *
 * Utilities-Settlement of Low value Debit transactions.
 */
class EFTD extends PurposeCode
{
    private string $code = 'EFTD';
    private string $description = 'Utilities-Settlement of Low value Debit transactions.';
}