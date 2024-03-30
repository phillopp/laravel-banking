<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code EXPT
 *
 * Cash collateral related to trading of an exotic option for example a non-standard option.
 */
class EXPT extends PurposeCode
{
    private string $code = 'EXPT';
    private string $description = 'Cash collateral related to trading of an exotic option for example a non-standard option.';
}