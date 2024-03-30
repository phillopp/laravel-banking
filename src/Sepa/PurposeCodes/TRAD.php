<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code TRAD
 *
 * Transaction is related to a trade services operation.
 */
class TRAD extends PurposeCode
{
    private string $code = 'TRAD';
    private string $description = 'Transaction is related to a trade services operation.';
}