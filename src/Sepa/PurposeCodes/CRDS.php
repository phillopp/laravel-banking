<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CRDS
 *
 * Cash collateral related to trading of credit default swap.
 */
class CRDS extends PurposeCode
{
    private string $code = 'CRDS';
    private string $description = 'Cash collateral related to trading of credit default swap.';
}