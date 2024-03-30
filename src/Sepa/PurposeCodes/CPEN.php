<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CPEN
 *
 * Cash penalties related to securities transaction, including CSDR Settlement Discipline Regime.
 */
class CPEN extends PurposeCode
{
    private string $code = 'CPEN';
    private string $description = 'Cash penalties related to securities transaction, including CSDR Settlement Discipline Regime.';
}