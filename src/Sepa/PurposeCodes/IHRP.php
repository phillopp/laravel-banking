<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code IHRP
 *
 * Transaction is payment for an installment/hire-purchase agreement.
 */
class IHRP extends PurposeCode
{
    private string $code = 'IHRP';
    private string $description = 'Transaction is payment for an installment/hire-purchase agreement.';
}