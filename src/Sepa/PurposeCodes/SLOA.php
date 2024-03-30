<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SLOA
 *
 * Cash collateral related to a Secured loan.
 */
class SLOA extends PurposeCode
{
    private string $code = 'SLOA';
    private string $description = 'Cash collateral related to a Secured loan.';
}