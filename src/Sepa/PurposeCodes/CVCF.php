<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CVCF
 *
 * Transaction is a payment for convalescence care facility services.
 */
class CVCF extends PurposeCode
{
    private string $code = 'CVCF';
    private string $description = 'Transaction is a payment for convalescence care facility services.';
}