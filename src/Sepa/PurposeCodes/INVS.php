<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code INVS
 *
 * Transaction is for the payment of mutual funds, investment products and shares
 */
class INVS extends PurposeCode
{
    private string $code = 'INVS';
    private string $description = 'Transaction is for the payment of mutual funds, investment products and shares';
}