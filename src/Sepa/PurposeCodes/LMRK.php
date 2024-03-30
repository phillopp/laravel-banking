<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code LMRK
 *
 * Cash collateral payments resulting from the marked-to-market of a portfolio of loaned securities where the instrumenttypes are not specified
 */
class LMRK extends PurposeCode
{
    private string $code = 'LMRK';
    private string $description = 'Cash collateral payments resulting from the marked-to-market of a portfolio of loaned securities where the instrumenttypes are not specified';
}