<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CRTL
 *
 * Cash collateral related to opening of a credit line before trading.
 */
class CRTL extends PurposeCode
{
    private string $code = 'CRTL';
    private string $description = 'Cash collateral related to opening of a credit line before trading.';
}