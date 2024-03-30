<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SAVG
 *
 * Transfer to savings/retirement account.
 */
class SAVG extends PurposeCode
{
    private string $code = 'SAVG';
    private string $description = 'Transfer to savings/retirement account.';
}