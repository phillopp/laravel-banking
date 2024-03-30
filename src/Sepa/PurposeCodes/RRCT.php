<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code RRCT
 *
 * Transaction is related to a reimbursement for commercial reasons of a correctly received credit transfer.
 */
class RRCT extends PurposeCode
{
    private string $code = 'RRCT';
    private string $description = 'Transaction is related to a reimbursement for commercial reasons of a correctly received credit transfer.';
}