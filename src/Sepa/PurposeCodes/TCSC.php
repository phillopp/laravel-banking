<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code TCSC
 *
 * Transaction is related to a payment associated with charges levied by a town council.
 */
class TCSC extends PurposeCode
{
    private string $code = 'TCSC';
    private string $description = 'Transaction is related to a payment associated with charges levied by a town council.';
}