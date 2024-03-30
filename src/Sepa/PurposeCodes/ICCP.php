<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code ICCP
 *
 * Transaction is reimbursement of credit card payment.
 */
class ICCP extends PurposeCode
{
    private string $code = 'ICCP';
    private string $description = 'Transaction is reimbursement of credit card payment.';
}