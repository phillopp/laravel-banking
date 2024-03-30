<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code EQPT
 *
 * Cash collateral related to trading of equity option (Also known as stock options).
 */
class EQPT extends PurposeCode
{
    private string $code = 'EQPT';
    private string $description = 'Cash collateral related to trading of equity option (Also known as stock options).';
}