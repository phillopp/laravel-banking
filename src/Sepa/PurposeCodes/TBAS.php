<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code TBAS
 *
 * Cash collateral related to a To Be Announced (TBA)
 */
class TBAS extends PurposeCode
{
    private string $code = 'TBAS';
    private string $description = 'Cash collateral related to a To Be Announced (TBA)';
}