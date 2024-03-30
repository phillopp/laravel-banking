<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code ESTX
 *
 * Transaction is related to a payment of estate tax.
 */
class ESTX extends PurposeCode
{
    private string $code = 'ESTX';
    private string $description = 'Transaction is related to a payment of estate tax.';
}