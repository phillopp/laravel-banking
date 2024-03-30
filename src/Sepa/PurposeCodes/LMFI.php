<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code LMFI
 *
 * Cash collateral payments resulting from the marked-to-market of a portfolio of loaned fixed income securities
 */
class LMFI extends PurposeCode
{
    private string $code = 'LMFI';
    private string $description = 'Cash collateral payments resulting from the marked-to-market of a portfolio of loaned fixed income securities';
}