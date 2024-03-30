<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CCIR
 *
 * Cash Collateral related to a Cross Currency Interest Rate Swap, indicating the exchange of fixed interest payments in one currency for those in another.
 */
class CCIR extends PurposeCode
{
    private string $code = 'CCIR';
    private string $description = 'Cash Collateral related to a Cross Currency Interest Rate Swap, indicating the exchange of fixed interest payments in one currency for those in another.';
}