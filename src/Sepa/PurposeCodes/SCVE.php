<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SCVE
 *
 * Transaction is related to purchase and sale of services.
 */
class SCVE extends PurposeCode
{
    private string $code = 'SCVE';
    private string $description = 'Transaction is related to purchase and sale of services.';
}