<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code GAHO
 *
 * Salary and Benefits-Allowance from government to individuals to support payments of housing.
 */
class GAHO extends PurposeCode
{
    private string $code = 'GAHO';
    private string $description = 'Salary and Benefits-Allowance from government to individuals to support payments of housing.';
}