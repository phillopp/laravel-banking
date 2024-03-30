<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code FACT
 *
 * Payment related to a factor update
 */
class FACT extends PurposeCode
{
    private string $code = 'FACT';
    private string $description = 'Payment related to a factor update';
}