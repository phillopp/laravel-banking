<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code ALLW
 *
 * Transaction is the payment of allowances.
 */
class ALLW extends PurposeCode
{
    private string $code = 'ALLW';
    private string $description = 'Transaction is the payment of allowances.';
}