<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code NETT
 *
 * Transaction is related to a netting operation.
 */
class NETT extends PurposeCode
{
    private string $code = 'NETT';
    private string $description = 'Transaction is related to a netting operation.';
}