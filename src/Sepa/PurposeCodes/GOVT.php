<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code GOVT
 *
 * Transaction is a payment to or from a government department.
 */
class GOVT extends PurposeCode
{
    private string $code = 'GOVT';
    private string $description = 'Transaction is a payment to or from a government department.';
}