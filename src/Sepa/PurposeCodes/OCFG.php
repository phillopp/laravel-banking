<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code OCFG
 *
 * Transaction is the payment of a foreign order cheque
 */
class OCFG extends PurposeCode
{
    private string $code = 'OCFG';
    private string $description = 'Transaction is the payment of a foreign order cheque';
}