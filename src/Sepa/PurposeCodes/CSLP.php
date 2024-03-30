<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CSLP
 *
 * Transaction is a payment by a company to a bank for financing social loans to employees.
 */
class CSLP extends PurposeCode
{
    private string $code = 'CSLP';
    private string $description = 'Transaction is a payment by a company to a bank for financing social loans to employees.';
}