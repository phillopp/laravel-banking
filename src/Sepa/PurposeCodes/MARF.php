<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code MARF
 *
 * Transaction is related to a medical aid refund.
 */
class MARF extends PurposeCode
{
    private string $code = 'MARF';
    private string $description = 'Transaction is related to a medical aid refund.';
}