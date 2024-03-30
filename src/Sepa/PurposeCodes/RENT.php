<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code RENT
 *
 * Transaction is the payment of rent.
 */
class RENT extends PurposeCode
{
    private string $code = 'RENT';
    private string $description = 'Transaction is the payment of rent.';
}