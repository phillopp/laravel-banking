<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code INPC
 *
 * Transaction is a payment of car insurance premium.
 */
class INPC extends PurposeCode
{
    private string $code = 'INPC';
    private string $description = 'Transaction is a payment of car insurance premium.';
}