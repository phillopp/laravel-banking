<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code GOVI
 *
 * Transaction is related to a payment of government insurance.
 */
class GOVI extends PurposeCode
{
    private string $code = 'GOVI';
    private string $description = 'Transaction is related to a payment of government insurance.';
}