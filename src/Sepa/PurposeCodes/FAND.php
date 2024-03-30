<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code FAND
 *
 * Financial aid by State authorities for abolition of consequences of natural disasters.
 */
class FAND extends PurposeCode
{
    private string $code = 'FAND';
    private string $description = 'Financial aid by State authorities for abolition of consequences of natural disasters.';
}