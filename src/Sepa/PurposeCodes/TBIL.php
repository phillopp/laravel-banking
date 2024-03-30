<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code TBIL
 *
 * Transaction is related to a payment of telecommunications related bill.
 */
class TBIL extends PurposeCode
{
    private string $code = 'TBIL';
    private string $description = 'Transaction is related to a payment of telecommunications related bill.';
}