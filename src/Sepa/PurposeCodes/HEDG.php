<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code HEDG
 *
 * Transaction is related to a hedging operation.
 */
class HEDG extends PurposeCode
{
    private string $code = 'HEDG';
    private string $description = 'Transaction is related to a hedging operation.';
}