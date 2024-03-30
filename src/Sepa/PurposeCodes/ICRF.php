<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code ICRF
 *
 * Transaction is a payment for intermediate care facility services.
 */
class ICRF extends PurposeCode
{
    private string $code = 'ICRF';
    private string $description = 'Transaction is a payment for intermediate care facility services.';
}