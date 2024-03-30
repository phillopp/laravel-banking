<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code FERB
 *
 * Transaction is a payment for ferry related business.
 */
class FERB extends PurposeCode
{
    private string $code = 'FERB';
    private string $description = 'Transaction is a payment for ferry related business.';
}