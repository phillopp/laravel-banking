<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code ELEC
 *
 * Transaction is related to a payment of electricity bill.
 */
class ELEC extends PurposeCode
{
    private string $code = 'ELEC';
    private string $description = 'Transaction is related to a payment of electricity bill.';
}