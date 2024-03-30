<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code EFTC
 *
 * Utilities-Settlement of Low value Credit transactions.
 */
class EFTC extends PurposeCode
{
    private string $code = 'EFTC';
    private string $description = 'Utilities-Settlement of Low value Credit transactions.';
}