<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code RINP
 *
 * Transaction is related to a payment of a recurring installment made at regular intervals.
 */
class RINP extends PurposeCode
{
    private string $code = 'RINP';
    private string $description = 'Transaction is related to a payment of a recurring installment made at regular intervals.';
}