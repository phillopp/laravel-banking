<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code TBAN
 *
 * TBA pair-off cash wire net movement
 */
class TBAN extends PurposeCode
{
    private string $code = 'TBAN';
    private string $description = 'TBA pair-off cash wire net movement';
}