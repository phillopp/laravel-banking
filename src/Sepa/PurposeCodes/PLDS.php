<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code PLDS
 *
 * Payment of funds from a lender as part of the issuance of a property loan.
 */
class PLDS extends PurposeCode
{
    private string $code = 'PLDS';
    private string $description = 'Payment of funds from a lender as part of the issuance of a property loan.';
}