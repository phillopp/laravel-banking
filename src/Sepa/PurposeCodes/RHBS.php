<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code RHBS
 *
 * Benefit for the duration of occupational rehabilitation.
 */
class RHBS extends PurposeCode
{
    private string $code = 'RHBS';
    private string $description = 'Benefit for the duration of occupational rehabilitation.';
}