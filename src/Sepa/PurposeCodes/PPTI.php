<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code PPTI
 *
 * Transaction is a payment of property insurance.
 */
class PPTI extends PurposeCode
{
    private string $code = 'PPTI';
    private string $description = 'Transaction is a payment of property insurance.';
}