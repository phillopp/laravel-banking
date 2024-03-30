<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code FORW
 *
 * FX trades with a value date in the future.
 */
class FORW extends PurposeCode
{
    private string $code = 'FORW';
    private string $description = 'FX trades with a value date in the future.';
}