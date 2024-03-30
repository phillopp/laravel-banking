<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code INSM
 *
 * Transaction is related to a payment of an installment.
 */
class INSM extends PurposeCode
{
    private string $code = 'INSM';
    private string $description = 'Transaction is related to a payment of an installment.';
}