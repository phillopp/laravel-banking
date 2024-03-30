<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code RRBN
 *
 * Cash payment resulting from a Round Robin
 */
class RRBN extends PurposeCode
{
    private string $code = 'RRBN';
    private string $description = 'Cash payment resulting from a Round Robin';
}