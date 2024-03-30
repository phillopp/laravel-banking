<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code TPRI
 *
 * Tri-Party Repo related interest
 */
class TPRI extends PurposeCode
{
    private string $code = 'TPRI';
    private string $description = 'Tri-Party Repo related interest';
}