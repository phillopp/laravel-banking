<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code GIFT
 *
 * Payment with no commercial or statutory purpose.
 */
class GIFT extends PurposeCode
{
    private string $code = 'GIFT';
    private string $description = 'Payment with no commercial or statutory purpose.';
}