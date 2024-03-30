<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code BECH
 *
 * Transaction is related to a payment made to assist parent/guardian to maintain child.
 */
class BECH extends PurposeCode
{
    private string $code = 'BECH';
    private string $description = 'Transaction is related to a payment made to assist parent/guardian to maintain child.';
}