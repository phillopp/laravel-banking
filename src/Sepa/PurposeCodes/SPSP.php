<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SPSP
 *
 * Salary or pension payment for more months in one amount or a delayed payment of salaries or pensions.
 */
class SPSP extends PurposeCode
{
    private string $code = 'SPSP';
    private string $description = 'Salary or pension payment for more months in one amount or a delayed payment of salaries or pensions.';
}