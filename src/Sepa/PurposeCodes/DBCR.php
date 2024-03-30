<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code DBCR
 *
 * Card Settlement-Settlement of Debit Card transactions.
 */
class DBCR extends PurposeCode
{
    private string $code = 'DBCR';
    private string $description = 'Card Settlement-Settlement of Debit Card transactions.';
}