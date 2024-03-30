<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code TAXS
 *
 * Transaction is the payment of taxes.
 */
class TAXS extends PurposeCode
{
    private string $code = 'TAXS';
    private string $description = 'Transaction is the payment of taxes.';
}