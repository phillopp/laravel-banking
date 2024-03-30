<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code FIXI
 *
 * Cash collateral related to a fixed income instrument
 */
class FIXI extends PurposeCode
{
    private string $code = 'FIXI';
    private string $description = 'Cash collateral related to a fixed income instrument';
}