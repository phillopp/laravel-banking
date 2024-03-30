<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code RCPT
 *
 * Transaction is related to a payment of receipt.
 */
class RCPT extends PurposeCode
{
    private string $code = 'RCPT';
    private string $description = 'Transaction is related to a payment of receipt.';
}