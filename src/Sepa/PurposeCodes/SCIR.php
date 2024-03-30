<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SCIR
 *
 * Cash collateral related to Single Currency Interest Rate Swap.
 */
class SCIR extends PurposeCode
{
    private string $code = 'SCIR';
    private string $description = 'Cash collateral related to Single Currency Interest Rate Swap.';
}