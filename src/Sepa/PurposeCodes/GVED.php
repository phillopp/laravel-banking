<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code GVED
 *
 * Transaction is payment to category D Austrian government employees.
 */
class GVED extends PurposeCode
{
    private string $code = 'GVED';
    private string $description = 'Transaction is payment to category D Austrian government employees.';
}