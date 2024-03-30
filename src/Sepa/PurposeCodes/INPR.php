<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code INPR
 *
 * Transaction is related to an insurance premium refund.
 */
class INPR extends PurposeCode
{
    private string $code = 'INPR';
    private string $description = 'Transaction is related to an insurance premium refund.';
}