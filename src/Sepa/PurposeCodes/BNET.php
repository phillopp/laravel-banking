<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code BNET
 *
 * Bond Forward pair-off cash net movement
 */
class BNET extends PurposeCode
{
    private string $code = 'BNET';
    private string $description = 'Bond Forward pair-off cash net movement';
}