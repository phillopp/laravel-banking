<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code ADVA
 *
 * Transaction is an advance payment.
 */
class ADVA extends PurposeCode
{
    private string $code = 'ADVA';
    private string $description = 'Transaction is an advance payment.';
}