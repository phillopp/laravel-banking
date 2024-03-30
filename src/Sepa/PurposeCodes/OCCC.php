<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code OCCC
 *
 * Client owned collateral identified as eligible for OCC pledging
 */
class OCCC extends PurposeCode
{
    private string $code = 'OCCC';
    private string $description = 'Client owned collateral identified as eligible for OCC pledging';
}