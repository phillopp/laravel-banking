<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code AMEX
 *
 * Card Settlement-Settlement of AMEX transactions.
 */
class AMEX extends PurposeCode
{
    private string $code = 'AMEX';
    private string $description = 'Card Settlement-Settlement of AMEX transactions.';
}