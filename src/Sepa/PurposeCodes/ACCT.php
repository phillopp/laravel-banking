<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code ACCT
 *
 * Transaction moves funds between 2 accounts of same account holder at the same bank.
 */
class ACCT extends PurposeCode
{
    private string $code = 'ACCT';
    private string $description = 'Transaction moves funds between 2 accounts of same account holder at the same bank.';
}