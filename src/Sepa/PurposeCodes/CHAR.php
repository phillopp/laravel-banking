<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CHAR
 *
 * Transaction is a payment for charity reasons.
 */
class CHAR extends PurposeCode
{
    private string $code = 'CHAR';
    private string $description = 'Transaction is a payment for charity reasons.';
}