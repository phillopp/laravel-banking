<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code ALMY
 *
 * Transaction is the payment of alimony.
 */
class ALMY extends PurposeCode
{
    private string $code = 'ALMY';
    private string $description = 'Transaction is the payment of alimony.';
}