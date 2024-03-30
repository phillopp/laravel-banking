<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code AEMP
 *
 * Payment concerning active employment policy.
 */
class AEMP extends PurposeCode
{
    private string $code = 'AEMP';
    private string $description = 'Payment concerning active employment policy.';
}