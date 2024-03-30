<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CRPR
 *
 * Cash collateral related to a combination of various types of trades.
 */
class CRPR extends PurposeCode
{
    private string $code = 'CRPR';
    private string $description = 'Cash collateral related to a combination of various types of trades.';
}