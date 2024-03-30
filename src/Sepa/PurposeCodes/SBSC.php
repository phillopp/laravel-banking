<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SBSC
 *
 * Cash collateral related to a Securities Buy Sell Sell Buy Back
 */
class SBSC extends PurposeCode
{
    private string $code = 'SBSC';
    private string $description = 'Cash collateral related to a Securities Buy Sell Sell Buy Back';
}