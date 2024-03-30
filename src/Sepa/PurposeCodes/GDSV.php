<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code GDSV
 *
 * Transaction is related to purchase and sale of goods and services.
 */
class GDSV extends PurposeCode
{
    private string $code = 'GDSV';
    private string $description = 'Transaction is related to purchase and sale of goods and services.';
}