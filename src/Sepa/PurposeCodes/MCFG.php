<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code MCFG
 *
 * Transaction is the payment of a foreign multi-currency cheque
 */
class MCFG extends PurposeCode
{
    private string $code = 'MCFG';
    private string $description = 'Transaction is the payment of a foreign multi-currency cheque';
}