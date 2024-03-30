<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SCRP
 *
 * Cash collateral related to Combination of securities-related exposure types.
 */
class SCRP extends PurposeCode
{
    private string $code = 'SCRP';
    private string $description = 'Cash collateral related to Combination of securities-related exposure types.';
}