<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SCIE
 *
 * Cash collateral related to Exotic single currency interest rate swap.
 */
class SCIE extends PurposeCode
{
    private string $code = 'SCIE';
    private string $description = 'Cash collateral related to Exotic single currency interest rate swap.';
}