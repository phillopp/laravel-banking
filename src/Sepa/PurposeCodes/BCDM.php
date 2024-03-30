<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code BCDM
 *
 * Transaction is the payment of a domestic bearer cheque.
 */
class BCDM extends PurposeCode
{
    private string $code = 'BCDM';
    private string $description = 'Transaction is the payment of a domestic bearer cheque.';
}