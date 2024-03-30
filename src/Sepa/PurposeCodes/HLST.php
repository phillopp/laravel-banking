<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code HLST
 *
 * Transaction is related to the settlement of a property loan.
 */
class HLST extends PurposeCode
{
    private string $code = 'HLST';
    private string $description = 'Transaction is related to the settlement of a property loan.';
}