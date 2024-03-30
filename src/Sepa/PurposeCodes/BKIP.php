<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code BKIP
 *
 * Accrued interest payments. Specific to bank loans.
 */
class BKIP extends PurposeCode
{
    private string $code = 'BKIP';
    private string $description = 'Accrued interest payments. Specific to bank loans.';
}