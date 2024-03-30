<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code GDDS
 *
 * Transaction is related to purchase and sale of goods.
 */
class GDDS extends PurposeCode
{
    private string $code = 'GDDS';
    private string $description = 'Transaction is related to purchase and sale of goods.';
}