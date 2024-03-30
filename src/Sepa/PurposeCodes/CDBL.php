<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CDBL
 *
 * Transaction is related to a payment of credit card bill.
 */
class CDBL extends PurposeCode
{
    private string $code = 'CDBL';
    private string $description = 'Transaction is related to a payment of credit card bill.';
}