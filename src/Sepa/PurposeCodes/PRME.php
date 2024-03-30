<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code PRME
 *
 * Transaction is related to a precious metal operation.
 */
class PRME extends PurposeCode
{
    private string $code = 'PRME';
    private string $description = 'Transaction is related to a precious metal operation.';
}