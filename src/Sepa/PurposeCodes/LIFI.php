<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code LIFI
 *
 * Transaction is a payment of life insurance.
 */
class LIFI extends PurposeCode
{
    private string $code = 'LIFI';
    private string $description = 'Transaction is a payment of life insurance.';
}