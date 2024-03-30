<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code EQUS
 *
 * Cash collateral related to equity swap trades where the return of an equity is exchanged for either a fixed or a floating rate of interest.
 */
class EQUS extends PurposeCode
{
    private string $code = 'EQUS';
    private string $description = 'Cash collateral related to equity swap trades where the return of an equity is exchanged for either a fixed or a floating rate of interest.';
}