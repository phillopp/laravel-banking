<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code DMEQ
 *
 * Transaction is a payment is for use of durable medical equipment.
 */
class DMEQ extends PurposeCode
{
    private string $code = 'DMEQ';
    private string $description = 'Transaction is a payment is for use of durable medical equipment.';
}