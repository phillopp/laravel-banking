<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CASH
 *
 * Transaction is a general cash management instruction.
 */
class CASH extends PurposeCode
{
    private string $code = 'CASH';
    private string $description = 'Transaction is a general cash management instruction.';
}