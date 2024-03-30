<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code RIMB
 *
 * Transaction is related to a reimbursement of a previous erroneous transaction.
 */
class RIMB extends PurposeCode
{
    private string $code = 'RIMB';
    private string $description = 'Transaction is related to a reimbursement of a previous erroneous transaction.';
}