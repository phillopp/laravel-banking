<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CDCD
 *
 * ATM Cash Withdrawal in an unattended or Cash Advance in an attended environment (POI or bank counter)
 */
class CDCD extends PurposeCode
{
    private string $code = 'CDCD';
    private string $description = 'ATM Cash Withdrawal in an unattended or Cash Advance in an attended environment (POI or bank counter)';
}