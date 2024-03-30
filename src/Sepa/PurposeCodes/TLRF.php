<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code TLRF
 *
 * Any non-US mutual fund trailer fee (retrocession) payment (use ISIN to determine onshore versus offshore designation)
 */
class TLRF extends PurposeCode
{
    private string $code = 'TLRF';
    private string $description = 'Any non-US mutual fund trailer fee (retrocession) payment (use ISIN to determine onshore versus offshore designation)';
}