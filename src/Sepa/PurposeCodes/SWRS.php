<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SWRS
 *
 * Reset payment for a swap contract
 */
class SWRS extends PurposeCode
{
    private string $code = 'SWRS';
    private string $description = 'Reset payment for a swap contract';
}