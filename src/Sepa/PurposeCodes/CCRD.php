<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CCRD
 *
 * Transaction is related to a payment of credit card account.
 */
class CCRD extends PurposeCode
{
    private string $code = 'CCRD';
    private string $description = 'Transaction is related to a payment of credit card account.';
}