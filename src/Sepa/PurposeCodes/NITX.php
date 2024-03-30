<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code NITX
 *
 * Transaction is related to a payment of net income tax.
 */
class NITX extends PurposeCode
{
    private string $code = 'NITX';
    private string $description = 'Transaction is related to a payment of net income tax.';
}