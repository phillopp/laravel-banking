<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code BBSC
 *
 * Transaction is related to a payment made as incentive to encourage parents to have more children
 */
class BBSC extends PurposeCode
{
    private string $code = 'BBSC';
    private string $description = 'Transaction is related to a payment made as incentive to encourage parents to have more children';
}