<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SHBC
 *
 * Short Sale broker owned collateral associated with a prime broker agreement
 */
class SHBC extends PurposeCode
{
    private string $code = 'SHBC';
    private string $description = 'Short Sale broker owned collateral associated with a prime broker agreement';
}