<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code REOD
 *
 * Transaction is for account overdraft repayment
 */
class REOD extends PurposeCode
{
    private string $code = 'REOD';
    private string $description = 'Transaction is for account overdraft repayment';
}