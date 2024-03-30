<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code FEES
 *
 * Payment of fees/charges.
 */
class FEES extends PurposeCode
{
    private string $code = 'FEES';
    private string $description = 'Payment of fees/charges.';
}