<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SLEB
 *
 * Cash collateral related to Securities lending and borrowing.
 */
class SLEB extends PurposeCode
{
    private string $code = 'SLEB';
    private string $description = 'Cash collateral related to Securities lending and borrowing.';
}