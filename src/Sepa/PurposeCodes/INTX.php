<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code INTX
 *
 * Transaction is related to a payment of income tax.
 */
class INTX extends PurposeCode
{
    private string $code = 'INTX';
    private string $description = 'Transaction is related to a payment of income tax.';
}