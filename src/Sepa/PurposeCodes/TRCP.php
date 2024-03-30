<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code TRCP
 *
 * Cash collateral related to a combination of treasury-related exposure types.
 */
class TRCP extends PurposeCode
{
    private string $code = 'TRCP';
    private string $description = 'Cash collateral related to a combination of treasury-related exposure types.';
}