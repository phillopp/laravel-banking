<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code BENE
 *
 * Transaction is related to a payment to a person who is unemployed/disabled.
 */
class BENE extends PurposeCode
{
    private string $code = 'BENE';
    private string $description = 'Transaction is related to a payment to a person who is unemployed/disabled.';
}