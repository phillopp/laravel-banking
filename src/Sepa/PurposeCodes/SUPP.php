<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SUPP
 *
 * Transaction is related to a payment to a supplier.
 */
class SUPP extends PurposeCode
{
    private string $code = 'SUPP';
    private string $description = 'Transaction is related to a payment to a supplier.';
}