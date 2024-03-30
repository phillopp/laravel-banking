<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SECU
 *
 * Transaction is the payment of securities.
 */
class SECU extends PurposeCode
{
    private string $code = 'SECU';
    private string $description = 'Transaction is the payment of securities.';
}