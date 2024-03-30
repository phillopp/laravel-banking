<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code PAYR
 *
 * Transaction is related to the payment of payroll.
 */
class PAYR extends PurposeCode
{
    private string $code = 'PAYR';
    private string $description = 'Transaction is related to the payment of payroll.';
}