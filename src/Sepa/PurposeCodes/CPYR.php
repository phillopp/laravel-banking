<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CPYR
 *
 * Transaction is payment of copyright.
 */
class CPYR extends PurposeCode
{
    private string $code = 'CPYR';
    private string $description = 'Transaction is payment of copyright.';
}