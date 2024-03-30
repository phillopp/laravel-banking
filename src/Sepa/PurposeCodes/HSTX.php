<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code HSTX
 *
 * Transaction is related to a payment of housing tax.
 */
class HSTX extends PurposeCode
{
    private string $code = 'HSTX';
    private string $description = 'Transaction is related to a payment of housing tax.';
}