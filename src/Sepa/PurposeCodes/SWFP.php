<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SWFP
 *
 * Final payments for a swap contract
 */
class SWFP extends PurposeCode
{
    private string $code = 'SWFP';
    private string $description = 'Final payments for a swap contract';
}