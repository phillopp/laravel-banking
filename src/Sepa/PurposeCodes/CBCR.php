<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CBCR
 *
 * Card Settlement-Settlement of Credit Card transactions.
 */
class CBCR extends PurposeCode
{
    private string $code = 'CBCR';
    private string $description = 'Card Settlement-Settlement of Credit Card transactions.';
}