<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code GAFA
 *
 * Salary and Benefits-Allowance from government to support family.
 */
class GAFA extends PurposeCode
{
    private string $code = 'GAFA';
    private string $description = 'Salary and Benefits-Allowance from government to support family.';
}