<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code IPRT
 *
 * Transaction in which the Return of the amount is fully or partial returned.
 */
class IPRT extends PurposeCode
{
    private string $code = 'IPRT';
    private string $description = 'Transaction in which the Return of the amount is fully or partial returned.';
}