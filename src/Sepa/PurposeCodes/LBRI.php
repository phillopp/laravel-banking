<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code LBRI
 *
 * Transaction is a payment of labor insurance.
 */
class LBRI extends PurposeCode
{
    private string $code = 'LBRI';
    private string $description = 'Transaction is a payment of labor insurance.';
}