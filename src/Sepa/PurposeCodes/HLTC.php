<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code HLTC
 *
 * Transaction is a payment for home health care services.
 */
class HLTC extends PurposeCode
{
    private string $code = 'HLTC';
    private string $description = 'Transaction is a payment for home health care services.';
}