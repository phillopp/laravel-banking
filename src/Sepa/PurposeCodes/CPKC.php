<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CPKC
 *
 * Transaction is related to carpark charges.
 */
class CPKC extends PurposeCode
{
    private string $code = 'CPKC';
    private string $description = 'Transaction is related to carpark charges.';
}