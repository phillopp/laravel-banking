<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code LOAR
 *
 * Transaction is related to repayment of loan to lender.
 */
class LOAR extends PurposeCode
{
    private string $code = 'LOAR';
    private string $description = 'Transaction is related to repayment of loan to lender.';
}