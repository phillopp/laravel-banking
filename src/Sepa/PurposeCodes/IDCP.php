<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code IDCP
 *
 * Transaction is reimbursement of debit card payment.
 */
class IDCP extends PurposeCode
{
    private string $code = 'IDCP';
    private string $description = 'Transaction is reimbursement of debit card payment.';
}