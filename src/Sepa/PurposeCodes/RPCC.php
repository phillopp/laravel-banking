<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code RPCC
 *
 * Repo client owned collateral associated with a repo master agreement – GMRA or MRA Master Repo Agreements
 */
class RPCC extends PurposeCode
{
    private string $code = 'RPCC';
    private string $description = 'Repo client owned collateral associated with a repo master agreement – GMRA or MRA Master Repo Agreements';
}