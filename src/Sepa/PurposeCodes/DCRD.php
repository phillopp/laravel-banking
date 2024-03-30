<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code DCRD
 *
 * Transaction is related to a debit card payment.
 */
class DCRD extends PurposeCode
{
    private string $code = 'DCRD';
    private string $description = 'Transaction is related to a debit card payment.';
}