<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code IVPT
 *
 * Transaction is the payment for invoices.
 */
class IVPT extends PurposeCode
{
    private string $code = 'IVPT';
    private string $description = 'Transaction is the payment for invoices.';
}