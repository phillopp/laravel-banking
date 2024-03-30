<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code TRNC
 *
 * Transaction is payment of a beneficiary prefilled payment slip where beneficiary to payer information is truncated.
 */
class TRNC extends PurposeCode
{
    private string $code = 'TRNC';
    private string $description = 'Transaction is payment of a beneficiary prefilled payment slip where beneficiary to payer information is truncated.';
}