<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SWPT
 *
 * Cash collateral related to an option on interest rate swap.
 */
class SWPT extends PurposeCode
{
    private string $code = 'SWPT';
    private string $description = 'Cash collateral related to an option on interest rate swap.';
}