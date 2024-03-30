<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code RPBC
 *
 * Bi-lateral repo broker owned collateral associated with a repo master agreement – GMRA or MRA Master RepoAgreements
 */
class RPBC extends PurposeCode
{
    private string $code = 'RPBC';
    private string $description = 'Bi-lateral repo broker owned collateral associated with a repo master agreement – GMRA or MRA Master RepoAgreements';
}