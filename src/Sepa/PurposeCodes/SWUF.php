<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SWUF
 *
 * Upfront payment for a swap contract
 */
class SWUF extends PurposeCode
{
    private string $code = 'SWUF';
    private string $description = 'Upfront payment for a swap contract';
}