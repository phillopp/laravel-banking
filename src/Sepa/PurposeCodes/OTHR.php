<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code OTHR
 *
 * Other payment purpose.
 */
class OTHR extends PurposeCode
{
    private string $code = 'OTHR';
    private string $description = 'Other payment purpose.';
}