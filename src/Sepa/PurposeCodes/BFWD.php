<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code BFWD
 *
 * Cash collateral related to any securities traded out beyond 3 days which include treasury notes, JGBs and Gilts.
 */
class BFWD extends PurposeCode
{
    private string $code = 'BFWD';
    private string $description = 'Cash collateral related to any securities traded out beyond 3 days which include treasury notes, JGBs and Gilts.';
}