<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code LREV
 *
 * Revenue payments made by the lending agent to the client
 */
class LREV extends PurposeCode
{
    private string $code = 'LREV';
    private string $description = 'Revenue payments made by the lending agent to the client';
}