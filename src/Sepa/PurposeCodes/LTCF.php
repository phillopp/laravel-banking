<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code LTCF
 *
 * Transaction is a payment for long-term care facility services.
 */
class LTCF extends PurposeCode
{
    private string $code = 'LTCF';
    private string $description = 'Transaction is a payment for long-term care facility services.';
}