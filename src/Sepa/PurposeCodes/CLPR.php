<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CLPR
 *
 * Transaction is a payment of car loan principal payment.
 */
class CLPR extends PurposeCode
{
    private string $code = 'CLPR';
    private string $description = 'Transaction is a payment of car loan principal payment.';
}