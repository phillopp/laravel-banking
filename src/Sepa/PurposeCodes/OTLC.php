<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code OTLC
 *
 * Transaction is related to a payment of other telecom related bill.
 */
class OTLC extends PurposeCode
{
    private string $code = 'OTLC';
    private string $description = 'Transaction is related to a payment of other telecom related bill.';
}