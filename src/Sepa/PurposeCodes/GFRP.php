<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code GFRP
 *
 * Compensation to unemployed persons during insolvency procedures.
 */
class GFRP extends PurposeCode
{
    private string $code = 'GFRP';
    private string $description = 'Compensation to unemployed persons during insolvency procedures.';
}