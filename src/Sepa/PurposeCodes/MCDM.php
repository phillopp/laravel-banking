<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code MCDM
 *
 * Transaction is the payment of a domestic multi-currency cheque
 */
class MCDM extends PurposeCode
{
    private string $code = 'MCDM';
    private string $description = 'Transaction is the payment of a domestic multi-currency cheque';
}