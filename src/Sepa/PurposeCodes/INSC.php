<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code INSC
 *
 * Transaction is related to the payment of an insurance claim.
 */
class INSC extends PurposeCode
{
    private string $code = 'INSC';
    private string $description = 'Transaction is related to the payment of an insurance claim.';
}