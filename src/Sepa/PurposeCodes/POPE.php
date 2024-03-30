<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code POPE
 *
 * Transaction is related to a payment associated with a Point of Purchase Entry.
 */
class POPE extends PurposeCode
{
    private string $code = 'POPE';
    private string $description = 'Transaction is related to a payment associated with a Point of Purchase Entry.';
}