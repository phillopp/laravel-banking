<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SHCC
 *
 * Short Sale client owned collateral associated with a prime brokerage agreement
 */
class SHCC extends PurposeCode
{
    private string $code = 'SHCC';
    private string $description = 'Short Sale client owned collateral associated with a prime brokerage agreement';
}