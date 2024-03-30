<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SWPP
 *
 * Partial payment for a swap contract
 */
class SWPP extends PurposeCode
{
    private string $code = 'SWPP';
    private string $description = 'Partial payment for a swap contract';
}