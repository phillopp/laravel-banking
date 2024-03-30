<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code BCFG
 *
 * Transaction is the payment of a foreign bearer cheque.
 */
class BCFG extends PurposeCode
{
    private string $code = 'BCFG';
    private string $description = 'Transaction is the payment of a foreign bearer cheque.';
}