<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code GVEA
 *
 * Transaction is payment to category A Austrian government employees.
 */
class GVEA extends PurposeCode
{
    private string $code = 'GVEA';
    private string $description = 'Transaction is payment to category A Austrian government employees.';
}