<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code TLRR
 *
 * Any non-US mutual fund trailer fee (retrocession) rebate payment (use ISIN to determine onshore versus offshore designation)
 */
class TLRR extends PurposeCode
{
    private string $code = 'TLRR';
    private string $description = 'Any non-US mutual fund trailer fee (retrocession) rebate payment (use ISIN to determine onshore versus offshore designation)';
}