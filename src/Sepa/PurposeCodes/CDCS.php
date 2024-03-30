<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CDCS
 *
 * ATM Cash Withdrawal in an unattended or Cash Advance in an attended environment (POI or bank counter) with surcharging.
 */
class CDCS extends PurposeCode
{
    private string $code = 'CDCS';
    private string $description = 'ATM Cash Withdrawal in an unattended or Cash Advance in an attended environment (POI or bank counter) with surcharging.';
}