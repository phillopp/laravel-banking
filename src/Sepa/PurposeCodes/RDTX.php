<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code RDTX
 *
 * Transaction is related to a payment of road tax.
 */
class RDTX extends PurposeCode
{
    private string $code = 'RDTX';
    private string $description = 'Transaction is related to a payment of road tax.';
}