<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code PEFC
 *
 * Transaction is contribution to pension fund.
 */
class PEFC extends PurposeCode
{
    private string $code = 'PEFC';
    private string $description = 'Transaction is contribution to pension fund.';
}