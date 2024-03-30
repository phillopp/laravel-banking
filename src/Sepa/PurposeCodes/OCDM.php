<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code OCDM
 *
 * Transaction is the payment of a domestic order cheque
 */
class OCDM extends PurposeCode
{
    private string $code = 'OCDM';
    private string $description = 'Transaction is the payment of a domestic order cheque';
}