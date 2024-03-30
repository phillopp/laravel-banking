<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code TPRP
 *
 * Tri-party Repo related net gain/loss cash movement
 */
class TPRP extends PurposeCode
{
    private string $code = 'TPRP';
    private string $description = 'Tri-party Repo related net gain/loss cash movement';
}