<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code LOAN
 *
 * Transaction is related to transfer of loan to borrower.
 */
class LOAN extends PurposeCode
{
    private string $code = 'LOAN';
    private string $description = 'Transaction is related to transfer of loan to borrower.';
}