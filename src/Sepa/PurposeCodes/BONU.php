<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code BONU
 *
 * Transaction is related to payment of a bonus.
 */
class BONU extends PurposeCode
{
    private string $code = 'BONU';
    private string $description = 'Transaction is related to payment of a bonus.';
}