<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code TMPG
 *
 * Cash payment resulting from a TMPG Claim
 */
class TMPG extends PurposeCode
{
    private string $code = 'TMPG';
    private string $description = 'Cash payment resulting from a TMPG Claim';
}