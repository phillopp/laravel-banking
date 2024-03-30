<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SHSL
 *
 * Cash Collateral related to a Short Sell
 */
class SHSL extends PurposeCode
{
    private string $code = 'SHSL';
    private string $description = 'Cash Collateral related to a Short Sell';
}