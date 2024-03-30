<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code FUTR
 *
 * Cash related to futures trading activity.
 */
class FUTR extends PurposeCode
{
    private string $code = 'FUTR';
    private string $description = 'Cash related to futures trading activity.';
}