<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code GSCB
 *
 * Transaction is related to purchase and sale of goods and services with cash back.
 */
class GSCB extends PurposeCode
{
    private string $code = 'GSCB';
    private string $description = 'Transaction is related to purchase and sale of goods and services with cash back.';
}