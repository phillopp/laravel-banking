<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code RPSC
 *
 * Repo client owned segregated collateral associated with a repo master agreement
 */
class RPSC extends PurposeCode
{
    private string $code = 'RPSC';
    private string $description = 'Repo client owned segregated collateral associated with a repo master agreement';
}