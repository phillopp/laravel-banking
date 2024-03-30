<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code TAXR
 *
 * Transaction is the refund of a tax payment or obligation.
 */
class TAXR extends PurposeCode
{
    private string $code = 'TAXR';
    private string $description = 'Transaction is the refund of a tax payment or obligation.';
}