<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code LREB
 *
 * Securities lending rebate payments
 */
class LREB extends PurposeCode
{
    private string $code = 'LREB';
    private string $description = 'Securities lending rebate payments';
}