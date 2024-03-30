<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code PTXP
 *
 * Transaction is related to a payment of property tax.
 */
class PTXP extends PurposeCode
{
    private string $code = 'PTXP';
    private string $description = 'Transaction is related to a payment of property tax.';
}