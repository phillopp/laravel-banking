<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code ECPR
 *
 * E-Commerce payment return.
 */
class ECPR extends PurposeCode
{
    private string $code = 'ECPR';
    private string $description = 'E-Commerce payment return.';
}