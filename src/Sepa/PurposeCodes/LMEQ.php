<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code LMEQ
 *
 * Cash collateral payments resulting from the marked-to-market of a portfolio of loaned equity securities
 */
class LMEQ extends PurposeCode
{
    private string $code = 'LMEQ';
    private string $description = 'Cash collateral payments resulting from the marked-to-market of a portfolio of loaned equity securities';
}